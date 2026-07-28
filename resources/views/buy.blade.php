<x-layout>
	<x-slot name="title">
		"Купить iPhone"
	</x-slot>
	
	<main class="main">
        <section class="purchase-header">
            <div class="container purchase-container">
                <div class="warning-icon">
                    <i class="fas fa-exclamation-triangle"></i>
                </div>
                <h1>Учебный проект</h1>
                <p>Демонстрация интернет-магазина iPhone</p>
            </div>
        </section>

        <section class="educational-notice">
            <div class="notice-badge">Внимание</div>
            <div class="notice-icon">
                <i class="fas fa-graduation-cap"></i>
            </div>
            <h2>Это учебный проект</h2>
            <p class="lead">Данный интернет-магазин создан в демонстрационных целях и не является реальным магазином.</p>
            
            <div class="important-info">
                <p><strong>⚠️ Реальные покупки недоступны</strong></p>
                <p>Все функции магазина работают в демонстрационном режиме.</p>
            </div>

            <div class="product-summary">
                <h3>Ваш выбор:</h3>
                <div class="summary-item">
                    <span>{{ $phone->title }}</span>
                    <span>{{ $phone->price }}</span>
                </div>
                <div class="summary-item">
                    <span>Доставка</span>
                    <span>Бесплатно</span>
                </div>
                <div class="summary-total">
                    <span>Итого: {{ $phone->price }}</span>
                </div>
            </div>

            <div class="action-buttons">
                <a href="{{ route('phones.index') }}" class="btn-return">
                    <i class="fas fa-home"></i> На главную
                </a>
            </div>
        </section>

        <section class="container">
    <div class="features-grid">
        <div class="feature-card-edu">
            <div class="feature-icon">
                <i class="fas fa-server"></i>
            </div>
            <h3>Backend</h3>
            <p>Laravel Framework с архитектурой MVC и RESTful API</p>
        </div>

        <div class="feature-card-edu">
            <div class="feature-icon">
                <i class="fas fa-database"></i>
            </div>
            <h3>База данных</h3>
            <p>MySQL с оптимизированными запросами и миграциями</p>
        </div>

        <div class="feature-card-edu">
            <div class="feature-icon">
                <i class="fas fa-code-branch"></i>
            </div>
            <h3>Архитектура</h3>
            <p>Eloquent ORM, Middleware, Blade шаблоны</p>
        </div>

        <div class="feature-card-edu">
            <div class="feature-icon">
                <i class="fas fa-shield-alt"></i>
            </div>
            <h3>Безопасность</h3>
            <p>CSRF защита, валидация, аутентификация</p>
        </div>
    </div>
</section>

<section class="container">
    <div class="tech-stack">
        <h2>🛠 Технологический стек Laravel</h2>
        <p>Проект разработан на современном стеке веб-разработки:</p>
        
        <div class="tech-grid">
            <div class="tech-item">
                <div class="tech-icon">
                    <i class="fab fa-laravel"></i>
                </div>
                <h4>Laravel 11</h4>
                <p>PHP фреймворк</p>
            </div>

            <div class="tech-item">
                <div class="tech-icon">
                    <i class="fas fa-database"></i>
                </div>
                <h4>MySQL 8</h4>
                <p>Реляционная БД</p>
            </div>

            <div class="tech-item">
                <div class="tech-icon">
                    <i class="fas fa-terminal"></i>
                </div>
                <h4>Artisan</h4>
                <p>CLI инструменты</p>
            </div>
        </div>
    </div>
</section>
    </main>
</x-layout>