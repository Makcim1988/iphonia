<x-layout>
	<x-slot name="title">
		Часто задаваемые вопросы
	</x-slot>
	
	<main class="main">
        <section class="faq-header">
            <div class="container">
                <h1>Частые вопросы</h1>
                <div class="faq-breadcrumbs">
                    <a href="{{ route('phones.index') }}">Главная</a> / <span>FAQ</span>
                </div>
            </div>
        </section>

        <section class="faq-content">
            <div class="container">
                <div class="faq-categories">
                    <button class="faq-category active" data-category="all">
                        <i class="fas fa-star"></i> Все вопросы
                    </button>
                    <button class="faq-category" data-category="delivery">
                        <i class="fas fa-truck"></i> Доставка
                    </button>
                    <button class="faq-category" data-category="payment">
                        <i class="fas fa-credit-card"></i> Оплата
                    </button>
                    <button class="faq-category" data-category="warranty">
                        <i class="fas fa-shield-alt"></i> Гарантия
                    </button>
                    <button class="faq-category" data-category="return">
                        <i class="fas fa-exchange-alt"></i> Возврат
                    </button>
                    <button class="faq-category" data-category="technical">
                        <i class="fas fa-tools"></i> Техподдержка
                    </button>
                </div>

                <div class="faq-sections">
                    <div class="faq-section">
                        <h2>
                            <i class="fas fa-truck"></i>
                            Доставка и получение
                        </h2>
                        <div class="faq-list">
                            <div class="faq-item" data-categories="delivery">
                                <button class="faq-question">
                                    Сколько стоит доставка?
                                    <i class="fas fa-chevron-down"></i>
                                </button>
                                <div class="faq-answer">
                                    <div class="faq-answer-content">
                                        <p>Стоимость доставки зависит от вашего местоположения:</p>
                                        <ul>
                                            <li>Бесплатно при заказе от 1 500 руб)</li>
                                            <li>По Беларуси: от 24 руб (зависит от региона)</li>
                                            <li>Экспресс-доставка: 45 руб</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="faq-item" data-categories="delivery">
                                <button class="faq-question">
                                    Сколько времени занимает доставка?
                                    <i class="fas fa-chevron-down"></i>
                                </button>
                                <div class="faq-answer">
                                    <div class="faq-answer-content">
                                        <p>Сроки доставки:</p>
                                        <ul>
                                            <li>Минск: 1-2 рабочих дня</li>
                                            <li>Дричин: 2-3 рабочих дня</li>
                                            <li>Другие города: 3-7 рабочих дней</li>
                                            <li>Экспресс-доставка: в день заказа или на следующий день</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="faq-item" data-categories="delivery">
                                <button class="faq-question">
                                    Можно ли изменить адрес доставки после оформления заказа?
                                    <i class="fas fa-chevron-down"></i>
                                </button>
                                <div class="faq-answer">
                                    <div class="faq-answer-content">
                                        <p>Да, вы можете изменить адрес доставки до момента отправки заказа. Для этого свяжитесь с нашим менеджером по телефону 8 (800) 123-45-67.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="faq-section">
                        <h2>
                            <i class="fas fa-credit-card"></i>
                            Оплата и цены
                        </h2>
                        <div class="faq-list">
                            <div class="faq-item" data-categories="payment">
                                <button class="faq-question">
                                    Какие способы оплаты вы принимаете?
                                    <i class="fas fa-chevron-down"></i>
                                </button>
                                <div class="faq-answer">
                                    <div class="faq-answer-content">
                                        <p>Мы принимаем следующие способы оплаты:</p>
                                        <ul>
                                            <li>Банковские карты Visa, Mastercard, МИР</li>
                                            <li>Наличные курьеру</li>
                                            <li>Банковский перевод</li>
                                            <li>Рассрочка от банков-партнеров</li>
                                            <li>Trade-in старого устройства</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="faq-item" data-categories="payment">
                                <button class="faq-question">
                                    Есть ли у вас рассрочка?
                                    <i class="fas fa-chevron-down"></i>
                                </button>
                                <div class="faq-answer">
                                    <div class="faq-answer-content">
                                        <p>Да, мы предлагаем рассрочку на 6 или 12 месяцев без переплат от наших банков-партнеров. Для оформления рассрочки потребуется паспорт и банковская карта.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="faq-section">
                        <h2>
                            <i class="fas fa-shield-alt"></i>
                            Гарантия и сервис
                        </h2>
                        <div class="faq-list">
                            <div class="faq-item" data-categories="warranty">
                                <button class="faq-question">
                                    Какой срок гарантии на товары?
                                    <i class="fas fa-chevron-down"></i>
                                </button>
                                <div class="faq-answer">
                                    <div class="faq-answer-content">
                                        <p>На все товары Apple предоставляется официальная гарантия сроком 12 месяцев. Гарантия действует на территории всей России.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="faq-item" data-categories="warranty technical">
                                <button class="faq-question">
                                    Что делать, если товар сломался?
                                    <i class="fas fa-chevron-down"></i>
                                </button>
                                <div class="faq-answer">
                                    <div class="faq-answer-content">
                                        <p>Если ваш товар вышел из строя в течение гарантийного срока:</p>
                                        <ol>
                                            <li>Свяжитесь с нашей технической поддержкой</li>
                                            <li>Предоставьте данные о покупке</li>
                                            <li>Опишите проблему</li>
                                            <li>Мы организуем бесплатный ремонт или замену</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="faq-section">
                        <h2>
                            <i class="fas fa-exchange-alt"></i>
                            Возврат и обмен
                        </h2>
                        <div class="faq-list">
                            <div class="faq-item" data-categories="return">
                                <button class="faq-question">
                                    Можно ли вернуть товар?
                                    <i class="fas fa-chevron-down"></i>
                                </button>
                                <div class="faq-answer">
                                    <div class="faq-answer-content">
                                        <p>Да, вы можете вернуть товар надлежащего качества в течение 14 дней с момента покупки при соблюдении условий:</p>
                                        <ul>
                                            <li>Сохранен товарный вид</li>
                                            <li>Сохранилась оригинальная упаковка</li>
                                            <li>Нет следов использования</li>
                                            <li>Присутствуют все документы</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="faq-item" data-categories="return">
                                <button class="faq-question">
                                    Как оформить возврат?
                                    <i class="fas fa-chevron-down"></i>
                                </button>
                                <div class="faq-answer">
                                    <div class="faq-answer-content">
                                        <p>Для оформления возврата:</p>
                                        <ol>
                                            <li>Позвоните нам по телефону 8 (800) 123-45-67</li>
                                            <li>Подготовьте товар к возврату</li>
                                            <li>Отправьте товар курьером или привезите в магазин</li>
                                            <li>Получите возврат денег в течение 3-5 дней</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="faq-contact">
                    <h2>Не нашли ответ?</h2>
                    <p>Свяжитесь с нашей службой поддержки, и мы с радостью поможем вам</p>

                    <div class="contact-methods">
                        <div class="contact-method">
                            <i class="fas fa-clock"></i>
                            <h3>Часы работы</h3>
                            <p>Пн-Пт: 9:00-21:00<br>Сб-Вс: 10:00-20:00</p>
                        </div>
                        <div class="contact-method">
                            <i class="fas fa-comments"></i>
                            <h3>Онлайн-чат</h3>
                            <p>Круглосуточная поддержка в чате</p>
                        </div>
                        <div class="contact-method">
                            <i class="fas fa-store"></i>
                            <h3>Магазины</h3>
                            <p>Посетите наши розничные магазины</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-layout>

    

    