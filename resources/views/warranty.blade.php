<x-layout>
	<x-slot name="title">
		"Результаты поиска iPhone"
	</x-slot>
	
	<main class="main">
        <section class="warranty-header">
            <div class="container">
                <h1>Гарантия и сервис</h1>
                <div class="warranty-breadcrumbs">
                    <a href="{{ route('phones.index') }}">Главная</a> / <span>Гарантия</span>
                </div>
            </div>
        </section>

        <section class="warranty-content">
            <div class="container">
                <div class="warranty-hero">
                    <div class="warranty-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h2>Официальная гарантия Apple</h2>
                    <p>Мы предоставляем полную официальную гарантию на все продукты Apple. Ваше устройство защищено от производственных дефектов в течение всего гарантийного периода.</p>
                </div>

                <div class="warranty-features">
                    <div class="warranty-feature">
                        <div class="feature-icon">
                            <i class="fas fa-calendar-check"></i>
                        </div>
                        <h3>12 месяцев гарантии</h3>
                        <p>Официальная гарантия производителя на все устройства Apple сроком на 1 год</p>
                    </div>

                    <div class="warranty-feature">
                        <div class="feature-icon">
                            <i class="fas fa-tools"></i>
                        </div>
                        <h3>Бесплатный ремонт</h3>
                        <p>Бесплатное устранение любых производственных дефектов в авторизованных сервисных центрах</p>
                    </div>

                    <div class="warranty-feature">
                        <div class="feature-icon">
                            <i class="fas fa-sync-alt"></i>
                        </div>
                        <h3>Быстрая замена</h3>
                        <p>При серьезных неисправностях - оперативная замена устройства на новое</p>
                    </div>
                </div>

                <div class="warranty-info">
                    <div class="info-grid">
                        <div class="info-section">
                            <h3>Что покрывает гарантия</h3>
                            <div class="info-item">
                                <h4>Производственные дефекты</h4>
                                <p>Любые неисправности, вызванные ошибками производства</p>
                            </div>
                            <div class="info-item">
                                <h4>Аппаратные неисправности</h4>
                                <p>Проблемы с дисплеем, аккумулятором, камерой и другими компонентами</p>
                            </div>
                            <div class="info-item">
                                <h4>Программные ошибки</h4>
                                <p>Проблемы с работой операционной системы и предустановленного ПО</p>
                            </div>
                        </div>

                        <div class="info-section">
                            <h3>Что не покрывает гарантия</h3>
                            <div class="info-item">
                                <h4>Механические повреждения</h4>
                                <p>Трещины дисплея, вмятины, повреждения от падений</p>
                            </div>
                            <div class="info-item">
                                <h4>Воздействие жидкостей</h4>
                                <p>Повреждения, вызванные попаданием влаги или других жидкостей</p>
                            </div>
                            <div class="info-item">
                                <h4>Неправильная эксплуатация</h4>
                                <p>Повреждения из-за нарушения правил использования устройства</p>
                            </div>
                        </div>
                    </div>

                    <table class="warranty-table">
                        <thead>
                            <tr>
                                <th>Устройство</th>
                                <th>Срок гарантии</th>
                                <th>Тип обслуживания</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>iPhone</td>
                                <td>12 месяцев</td>
                                <td>Ремонт или замена</td>
                            </tr>
                            <tr>
                                <td>iPad</td>
                                <td>12 месяцев</td>
                                <td>Ремонт или замена</td>
                            </tr>
                            <tr>
                                <td>MacBook</td>
                                <td>12 месяцев</td>
                                <td>Ремонт на месте</td>
                            </tr>
                            <tr>
                                <td>Apple Watch</td>
                                <td>12 месяцев</td>
                                <td>Ремонт или замена</td>
                            </tr>
                            <tr>
                                <td>AirPods</td>
                                <td>12 месяцев</td>
                                <td>Замена набора</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </main>
</x-layout>