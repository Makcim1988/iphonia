<x-layout>
	<x-slot name='title'>
		iPhonia Магазин телефонов Apple
	</x-slot>
	
	<main class="main">
        <section class="hero">
            <div class="container">
                <h1>iPhone 16 Pro Max</h1>
                <p>Титан. Так прочнее. Так легче. Так лучше.</p>
                <div class="hero-actions">
                    <a href="{{ route('phones.buy', ['id' => '55'])}}"><button class="btn btn-primary">Купить сейчас</button></a>
                    <a href="{{ route('phones.show', ['id' => '55'])}}"><button class="btn btn-outline">Узнать больше</button></a>
                </div>
            </div>
        </section>

        <section class="features">
            <div class="container">
                <div class="feature-card">
                    <i class="fas fa-shield-alt"></i>
                    <h3>Оригинальная гарантия</h3>
                    <p>12 месяцев официальной гарантии Apple</p>
                </div>
                <div class="feature-card">
                    <i class="fas fa-truck"></i>
                    <h3>Быстрая доставка</h3>
                    <p>Доставка за 1-3 дня</p>
                </div>
                <div class="feature-card">
                    <i class="fas fa-exchange-alt"></i>
                    <h3>Легкий возврат</h3>
                    <p>14 дней на возврат без вопросов</p>
                </div>
                <div class="feature-card">
                    <i class="fas fa-headset"></i>
                    <h3>Поддержка 24/7</h3>
                    <p>Круглосуточная помощь клиентам</p>
                </div>
            </div>
        </section>

        <section class="products">
            <div class="container">
                <div class="product-grid">
                    @foreach($phones as $phone)
                        <div class="product-card">
                            <img src="{{ asset(explode(', ', $phone->imgs)[0]) }}" alt="{{ $phone->title }}" class="product-img">
                            <h3 class="product-title">{{ $phone->title }}</h3>
                            <div class="product-price">{{ $phone->price }} руб.</div>
                            <div>
                                <a href="{{ route('phones.buy', ['id' => $phone->id]) }}">
                                    <button class="btn btn-sm btn-primary">Купить</button>
                                </a>
                                <a href="{{ route('phones.show', ['id' => $phone->id]) }}">
                                    <button class="btn btn-sm btn-primary">Подробнее</button>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="paginate" style="display: flex; justify-content: center;">
                {{ $phones->links('pagination::bootstrap-4') }}
            </div>
            
        </section>

        <section class="promo">
            <div class="container">
                <div class="promo-content">
                    <h2>Акция! Скидка 10% на все модели</h2>
                    <p>Только до конца месяца при покупке с промокодом <strong>APPLE10</strong></p>
                    <a href=" {{ route('phones.sale') }}"><button class="btn btn-white">Подробнее об акции</button></a>
                </div>
            </div>
        </section>
    </main>
</x-layout>

    

