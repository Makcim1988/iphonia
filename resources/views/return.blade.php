<x-layout>
	<x-slot name="title">
		"Возврат iPhone"
	</x-slot>
	
	<main class="main">
        <section class="return-header">
            <div class="container">
                <h1>Возврат товара</h1>
                <div class="return-breadcrumbs">
                    <a href="{{ route('phones.index') }}">Главная</a> / <span>Возврат товара</span>
                </div>
            </div>
        </section>

        <section class="return-content">
            <div class="container">
                <div class="return-hero">
                    <div class="return-icon">
                        <i class="fas fa-exchange-alt"></i>
                    </div>
                    <h2>Процедура возврата товара</h2>
                    <p>Мы заботимся о наших клиентах и предоставляем удобную процедуру возврата товара в соответствии с законодательством</p>
                </div>

                <div class="return-steps">
                    <div class="return-step">
                        <div class="step-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <h3>Свяжитесь с нами</h3>
                        <p>Позвоните по телефону 8 (800) 123-45-67 или напишите на returns@iphonia.by в течение 14 дней с момента покупки</p>
                    </div>

                    <div class="return-step">
                        <div class="step-icon">
                            <i class="fas fa-box-open"></i>
                        </div>
                        <h3>Подготовьте товар</h3>
                        <p>Упакуйте товар в оригинальную упаковку со всеми аксессуарами и документами</p>
                    </div>

                    <div class="return-step">
                        <div class="step-icon">
                            <i class="fas fa-truck"></i>
                        </div>
                        <h3>Отправка товара</h3>
                        <p>Отправьте товар курьерской службой или привезите в любой из наших магазинов</p>
                    </div>

                    <div class="return-step">
                        <div class="step-icon">
                            <i class="fas fa-money-bill-wave"></i>
                        </div>
                        <h3>Получите возврат</h3>
                        <p>После проверки товара мы вернем деньги на вашу карту в течение 3-5 рабочих дней</p>
                    </div>
                </div>

                <div class="return-conditions">
                    <h2 style="text-align: center; margin-bottom: 40px;">Условия возврата</h2>
                    <div class="conditions-grid">
                        <div class="condition-section">
                            <h3>✅ Можно вернуть</h3>
                            <div class="condition-item">
                                <h4>Товар надлежащего качества</h4>
                                <p>В течение 14 дней с сохранением товарного вида и упаковки</p>
                            </div>
                            <div class="condition-item">
                                <h4>Неисправный товар</h4>
                                <p>В течение гарантийного срока (12 месяцев)</p>
                            </div>
                            <div class="condition-item">
                                <h4>Неподошедший товар</h4>
                                <p>Если товар не устроил по цвету, размеру или другим параметрам</p>
                            </div>
                        </div>

                        <div class="condition-section">
                            <h3>❌ Нельзя вернуть</h3>
                            <div class="condition-item">
                                <h4>Электронные устройства</h4>
                                <p>С активированным программным обеспечением (после первого включения)</p>
                            </div>
                            <div class="condition-item">
                                <h4>Поврежденные товары</h4>
                                <p>С механическими повреждениями или следами использования</p>
                            </div>
                            <div class="condition-item">
                                <h4>Аксессуары</h4>
                                <p>Наушники, чехлы и другие аксессуары после вскрытия упаковки</p>
                            </div>
                        </div>
                    </div>

                    <table class="return-table">
                        <thead>
                            <tr>
                                <th>Тип товара</th>
                                <th>Срок возврата</th>
                                <th>Условия</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>iPhone/iPad</td>
                                <td>14 дней</td>
                                <td>Без активации, в оригинальной упаковке</td>
                            </tr>
                            <tr>
                                <td>MacBook</td>
                                <td>14 дней</td>
                                <td>Без признаков использования</td>
                            </tr>
                            <tr>
                                <td>Apple Watch</td>
                                <td>14 дней</td>
                                <td>Без активации, все пленки на месте</td>
                            </tr>
                            <tr>
                                <td>AirPods и аксессуары</td>
                                <td>Не подлежат возврату</td>
                                <td>После вскрытия упаковки</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="return-faq">
                    <h2 style="text-align: center; margin-bottom: 40px;">Частые вопросы</h2>
                    <div class="faq-grid">
                        <div>
                            <div class="faq-item">
                                <div class="faq-question">
                                    Сколько времени занимает обработка возврата?
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                                <div class="faq-answer">
                                    Обычно обработка возврата занимает 3-5 рабочих дней после получения товара на наш склад.
                                </div>
                            </div>
                            <div class="faq-item">
                                <div class="faq-question">
                                    Нужно ли платить за доставку при возврате?
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                                <div class="faq-answer">
                                    При возврате бракованного товара доставку оплачиваем мы. При возврате товара надлежащего качества доставку оплачивает покупатель.
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="faq-item">
                                <div class="faq-question">
                                    Как вернуть товар, купленный онлайн?
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                                <div class="faq-answer">
                                    Заполните форму на этой странице, и мы вышлем вам инструкции по возврату курьерской службой.
                                </div>
                            </div>
                            <div class="faq-item">
                                <div class="faq-question">
                                    Можно ли обменять товар вместо возврата?
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                                <div class="faq-answer">
                                    Да, мы предлагаем обмен на аналогичный товар или другой товар из нашего каталога с перерасчетом стоимости.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-layout>