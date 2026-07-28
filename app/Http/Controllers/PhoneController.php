<?php

namespace App\Http\Controllers;
use App\Models\Phone;
use Illuminate\Http\Request;   

class PhoneController extends Controller
{
    public function index()
    {
        $phones = Phone::paginate(21);
        //dd($phones);

        $imgsSrc = [];
        foreach($phones as $phone)
        {
            $imgsSrc[] = explode(', ', $phone->imgs)[0];
        }
        //

        return view('index', ['phones' => $phones, 'imgsSrc' => $imgsSrc]);
    }

    public function show($id)
    {
        $phone = Phone::find($id);

        return view('show', ['phone' => $phone]);
    }
    
    public function sale()
    {
        return view('sale');
    }

    public function delivery()
    {
        return view('delivery');
    }

    public function contacts()
    {
        return view('contacts');
    }

    public function search()
    {
        return view('search');
    }

    public function basket()
    {
        return view('basket');
    }

    public function result(Request $request)
    {
        if (empty($request['title'])) {
            return back()->with('error', 'Нет данных для обработки');
        } else {
            $phones = Phone::where('title', 'LIKE', "%{$request->title}%")/*->orWhere('characteristics', 'LIKE', "%{$request->title}%")*/->paginate(12)->withQueryString();
            return view('result', ['phones' => $phones]);
        }
    }

    public function buy($id)
    {
        $phone = Phone::find($id);

        return view('buy', ['phone' => $phone]);
    }

    public function warranty()
    {
        return view('warranty');
    }

    public function returnPhone()
    {
        return view('return');
    }

    public function faq()
    {
        return view('faq');
    }

    public function userAgreement()
    {
        return view('user-agreement');
    }

    public function confidentiality()
    {
        return view('confidentiality');
    }
}