<x-layout>
	<x-slot:title>
		Контакты
	</x-slot>
	
	<main class="main">
        <section class="contacts-header">
            <div class="container">
                <h1>Контакты</h1>
                <div class="breadcrumbs">
                    <a href="{{ route('phones.index') }}">Главная</a> / <span>Контакты</span>
                </div>
            </div>
        </section>

        <section class="contacts-content">
            <div class="container">
                <div class="contacts-grid">
                    <div class="contact-info">
                        <h2>Наши контакты</h2>
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <div>
                                <h3>Телефон</h3>
                                <p>8 (800) 123-45-67</p>
                                <p class="small">Бесплатно по Беларуси</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <h3>Email</h3>
                                <p>info@iphonia.by</p>
                                <p class="small">Для общих вопросов</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-headset"></i>
                            <div>
                                <h3>Техподдержка</h3>
                                <p>support@iphonia.by</p>
                                <p class="small">Помощь с заказами</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-clock"></i>
                            <div>
                                <h3>Часы работы</h3>
                                <p>Пн-Пт: 9:00 - 21:00</p>
                                <p>Сб-Вс: 10:00 - 20:00</p>
                            </div>
                        </div>
                    </div>

                    <div class="contact-form">
                        <h2>Остались вопросы?</h2>
                        <p>Заполните форму и наш менеджер свяжется с вами в течение 15 минут</p>
                        <form>
                            <div class="form-group">
                                <input type="text" placeholder="Ваше имя" required>
                            </div>
                            <div class="form-group">
                                <input type="tel" placeholder="Телефон" required>
                            </div>
                            <div class="form-group">
                                <input type="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <textarea placeholder="Ваш вопрос" rows="4"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Отправить</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-layout>

    

    