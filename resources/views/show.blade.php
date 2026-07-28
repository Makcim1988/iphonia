<x-layout>
	<x-slot name="title">
		{{ $phone->title }}
	</x-slot>
	
	<main class="main">
        <section class="product-hero">
            <div class="container">
                <div class="product-breadcrumbs">
                    <a href="{{ route('phones.index') }}">Главная</a> / 
                    <span>{{ $phone->title }}</span>
                </div>
                
                <div class="product-container">
                    <div class="product-gallery">
                        <img src="{{ asset(explode(', ', $phone->imgs)[0]) }}" alt="{{ $phone->title }}" class="main-image">
                        <div class="thumbnail-container">
                            @for($i = 1; $i < count(explode(', ', $phone->imgs)) - 1; $i++)
                                <img src=" {{ explode(', ', $phone->imgs)[$i] }}" alt="{{ $phone->title }}" class="thumbnail">
                            @endfor
                        </div>
                    </div>
                    
                    <div class="product-info">
                        <h1 class="product-title">{{ $phone->title }}</h1>
                        
                        <div class="product-price">
                            <span>{{ $phone->price }} р.</span>
                        </div>
                        
                        <div class="product-actions">
                            <a href=" {{ route('phones.buy', ['id' => $phone->id]) }}"><button class="btn btn-primary btn-lg">Купить сейчас</button></a>
                        </div>
                        
                        <div class="delivery-info">
                            <div class="delivery-item">
                                <i class="fas fa-truck delivery-icon"></i>
                                <span>Доставка завтра — 15 р. или бесплатно при заказе от 1500 р.</span>
                            </div>
                            <div class="delivery-item">
                                <i class="fas fa-shield-alt delivery-icon"></i>
                                <span>Официальная гарантия Apple 1 год</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="product-tabs">
            <div class="container">
                <div class="tabs-header" style="display: flex; justify-content: center;">
                    <button class="tab-btn" data-tab="specs">Характеристики</button>
                </div>
                
                <div class="tab-content" id="specs">
                    {!! $phone->characteristics !!}
                </div>
            </div>
        </section>
    </main>
</x-layout>

    

    