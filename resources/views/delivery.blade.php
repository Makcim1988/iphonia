<x-layout>
	<x-slot name='title'>
		Доставка
	</x-slot>
	
	<main class="main">
        <section class="delivery-header">
            <div class="container">
                <h1>Доставка и оплата</h1>
                <div class="breadcrumbs">
                    <a href="{{ route('phones.index') }}">Главная</a> / <span>Доставка</span>
                </div>
            </div>
        </section>

        <section class="delivery-content">
            <div class="container">
                <div class="delivery-tabs">
                    <button class="tab-btn active" data-tab="delivery">Доставка</button>
                    <button class="tab-btn" data-tab="payment">Оплата</button>
                    <button class="tab-btn" data-tab="pickup">Самовывоз</button>
                </div>

                <div class="tab-content active" id="delivery">
                    <h2>Способы доставки</h2>
                    <div class="delivery-methods">
                        <div class="delivery-method">
                            <i class="fas fa-truck"></i>
                            <h3>Курьерская доставка</h3>
                            <p>Быстрая доставка в течение 1-3 дней. Курьер свяжется с вами перед выездом.</p>
                            <p class="delivery-price">Стоимость: 25 руб (бесплатно при заказе от 1 500 руб)</p>
                        </div>
                        <div class="delivery-method">
                            <i class="fas fa-plane"></i>
                            <h3>Доставка</h3>
                            <p>Отправляем товары в любой город через СДЭК или Почту.</p>
                            <p class="delivery-price">Стоимость: от 24 руб (зависит от региона)</p>
                        </div>
                        <div class="delivery-method">
                            <i class="fas fa-clock"></i>
                            <h3>Экспресс-доставка</h3>
                            <p>Доставка в день заказа или на следующий день для тех, кто не хочет ждать.</p>
                            <p class="delivery-price">Стоимость: 45 руб</p>
                        </div>
                    </div>
                </div>

                <div class="tab-content" id="payment">
                    <h2>Способы оплаты</h2>
                    <div class="payment-methods">
                        <div class="payment-method">
                            <i class="fas fa-credit-card"></i>
                            <h3>Онлайн-оплата</h3>
                            <p>Безопасная оплата картой Visa, Mastercard или МИР через платежный шлюз.</p>
                        </div>
                        <div class="payment-method">
                            <i class="fas fa-money-bill-wave"></i>
                            <h3>Наличными курьеру</h3>
                            <p>Оплата наличными при получении заказа. Предоставляем чек.</p>
                        </div>
                        <div class="payment-method">
                            <i class="fas fa-calendar-alt"></i>
                            <h3>Рассрочка</h3>
                            <p>Рассрочка на 6 или 12 месяцев без переплат от наших банков-партнеров.</p>
                        </div>
                        <div class="payment-method">
                            <i class="fas fa-exchange-alt"></i>
                            <h3>Trade-In</h3>
                            <p>Обменяйте ваш старый iPhone с доплатой на новую модель.</p>
                        </div>
                    </div>
                </div>

                <div class="tab-content" id="pickup">
                    <h2>Пункты самовывоза</h2>
                    <div class="pickup-points">
                        <div class="pickup-point">
                            <h3>Минск, ТЦ "Авиапарк"</h3>
                            <p><i class="fas fa-map-marker-alt"></i> Ходынский бульвар, 4</p>
                            <p><i class="fas fa-clock"></i> Ежедневно с 10:00 до 22:00</p>
                            <p><i class="fas fa-phone"></i> +7 (495) 123-45-67</p>
                        </div>
                        <div class="pickup-point">
                            <h3>Дричин, ТРЦ "Европейский"</h3>
                            <p><i class="fas fa-map-marker-alt"></i> Площадь Киевского вокзала, 2</p>
                            <p><i class="fas fa-clock"></i> Ежедневно с 10:00 до 23:00</p>
                            <p><i class="fas fa-phone"></i> +7 (495) 765-43-21</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="delivery-faq">
            <div class="container">
                <h2 class="section-title">Частые вопросы о доставке</h2>
                <div class="faq-list">
                    <div class="faq-item">
                        <button class="faq-question">
                            Сколько стоит доставка в мой город?
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="faq-answer">
                            <p>Стоимость доставки зависит от вашего местоположения и выбранной транспортной компании. После оформления заказа наш менеджер рассчитает точную стоимость доставки и свяжется с вами для подтверждения.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question">
                            Можно ли изменить адрес доставки после оформления заказа?
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="faq-answer">
                            <p>Да, вы можете изменить адрес доставки до момента отправки заказа. Пожалуйста, свяжитесь с нашим менеджером по телефону +7 (800) 123-45-67.</p>
                        </div>
                    </div>
                    <!-- Еще несколько вопросов -->
                </div>
            </div>
        </section>
    </main>

</x-layout>

    