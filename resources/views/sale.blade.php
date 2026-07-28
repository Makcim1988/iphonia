<x-layout>
	<x-slot name="title">
		Акции и предложения
	</x-slot>
	
	<main class="main">
        <section class="promotions-header">
            <div class="container">
                <h1>Акции и спецпредложения</h1>
                <div class="breadcrumbs">
                    <a href="{{ route('phones.index') }}">Главная</a> / <span>Акции</span>
                </div>
            </div>
        </section>

        <section class="promotions">
            <div class="container">
                <div class="promotion-cards">
                    <div class="promotion-card big">
                        <div class="promotion-content">
                            <h2>Летняя распродажа</h2>
                            <p class="promotion-date">До 31 августа</p>
                            <p>Скидка 20% на все модели iPhone 13 и iPhone 14 при оплате картой МИР</p>
                        </div>
                    </div>

                    <div class="promotion-card">
                        <div class="promotion-content">
                            <h3>Улучшенный Trade-In</h3>
                            <p class="promotion-date">Постоянное предложение</p>
                            <p>Сдайте старый iPhone и получите дополнительную скидку 100 руб. на новую модель</p>
                        </div>
                    </div>

                    <div class="promotion-card">
                        <div class="promotion-content">
                            <h3>Рассрочка 0%</h3>
                            <p class="promotion-date">Постоянное предложение</p>
                            <p>Купите новый iPhone без переплат. Рассрочка на 12 месяцев</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-layout>

    

    