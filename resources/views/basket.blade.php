<x-layout>
	<x-slot name="title">
		"Корзина iPhone"
	</x-slot>
	
	<main class="main">
        <section class="cart-header">
            <div class="container">
                <h1>Корзина покупок</h1>
                <div class="breadcrumbs">
                    <a href="index.html">Главная</a> / <span>Корзина</span>
                </div>
            </div>
        </section>

        <section class="cart-content">
            <div class="cart-grid">
                <div class="cart-items">
                    <h2>Товары в корзине (2)</h2>
                    
                    <div class="cart-item">
                        <div class="item-image">
                            <img src="https://via.placeholder.com/150x150?text=iPhone+15+Pro" alt="iPhone 15 Pro">
                        </div>
                        <div class="item-info">
                            <h3>iPhone 15 Pro 256GB (Титан черный)</h3>
                            <div class="item-price">119 990 ₽</div>
                            <div class="item-actions">
                                <button class="item-remove"><i class="fas fa-trash"></i> Удалить</button>
                                <button class="item-wishlist"><i class="fas fa-heart"></i> В избранное</button>
                            </div>
                        </div>
                        <div class="item-quantity">
                            <button class="quantity-btn minus">-</button>
                            <input type="number" value="1" min="1" class="quantity-input">
                            <button class="quantity-btn plus">+</button>
                        </div>
                        <div class="item-total">119 990 ₽</div>
                    </div>

                    <div class="cart-item">
                        <div class="item-image">
                            <img src="https://via.placeholder.com/150x150?text=AirPods+Pro" alt="AirPods Pro">
                        </div>
                        <div class="item-info">
                            <h3>AirPods Pro (2 поколение)</h3>
                            <div class="item-price">24 990 ₽</div>
                            <div class="item-actions">
                                <button class="item-remove"><i class="fas fa-trash"></i> Удалить</button>
                                <button class="item-wishlist"><i class="fas fa-heart"></i> В избранное</button>
                            </div>
                        </div>
                        <div class="item-quantity">
                            <button class="quantity-btn minus">-</button>
                            <input type="number" value="1" min="1" class="quantity-input">
                            <button class="quantity-btn plus">+</button>
                        </div>
                        <div class="item-total">24 990 ₽</div>
                    </div>

                    <div class="cart-promo">
                        <h3>Промокод</h3>
                        <input type="text" placeholder="Введите промокод" class="promo-input">
                        <button class="btn btn-outline promo-btn">Применить</button>
                    </div>
                </div>

                <div class="cart-summary">
                    <h3>Ваш заказ</h3>
                    <div class="summary-row">
                        <span>Товары (2)</span>
                        <span>144 980 ₽</span>
                    </div>
                    <div class="summary-row">
                        <span>Скидка</span>
                        <span class="discount">-5 000 ₽</span>
                    </div>
                    <div class="summary-row">
                        <span>Доставка</span>
                        <span>Бесплатно</span>
                    </div>
                    <div class="summary-total">
                        <span>Итого</span>
                        <span>139 980 ₽</span>
                    </div>
                    <button class="btn btn-primary checkout-btn">Перейти к оформлению</button>
                    
                    <div class="payment-methods">
                        <i class="fab fa-cc-visa"></i>
                        <i class="fab fa-cc-mastercard"></i>
                        <i class="fab fa-cc-mir"></i>
                        <i class="fas fa-credit-card"></i>
                    </div>
                </div>
            </div>

            <div class="cart-recommendations">
                <div class="container">
                    <h2>Рекомендуем добавить</h2>
                    <div class="recommendation-grid">
                        <div class="recommendation-item">
                            <img src="https://via.placeholder.com/120x120?text=MagSafe" alt="Чехол MagSafe">
                            <div class="recommendation-info">
                                <h4>Чехол MagSafe для iPhone 15 Pro</h4>
                                <div class="recommendation-price">4 990 ₽</div>
                                <button class="btn btn-sm btn-outline">Добавить</button>
                            </div>
                        </div>
                        <div class="recommendation-item">
                            <img src="https://via.placeholder.com/120x120?text=20W+Charger" alt="Зарядное устройство">
                            <div class="recommendation-info">
                                <h4>Адаптер питания USB-C 20W</h4>
                                <div class="recommendation-price">1 990 ₽</div>
                                <button class="btn btn-sm btn-outline">Добавить</button>
                            </div>
                        </div>
                        <div class="recommendation-item">
                            <img src="https://via.placeholder.com/120x120?text=AppleCare" alt="AppleCare+">
                            <div class="recommendation-info">
                                <h4>AppleCare+ для iPhone 15 Pro</h4>
                                <div class="recommendation-price">9 990 ₽</div>
                                <button class="btn btn-sm btn-outline">Добавить</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

</x-layout>