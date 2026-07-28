<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}?v={{ time() }}">
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="logo">
                <i class="fab fa-apple"></i>
                <span>iPhonia</span>
            </div>
            <nav class="nav">
                <a href="{{ route('phones.index') }}" class="nav-link">Главная</a>
                <a href="{{ route('phones.sale') }}" class="nav-link">Акции</a>
                <a href="{{ route('phones.delivery') }}" class="nav-link">Доставка</a>
                <a href="{{ route('phones.contacts') }}" class="nav-link">Контакты</a>
            </nav>
            <div class="header-actions">
                <a href="{{ route('phones.search') }}"><button class="search-btn"><i class="fas fa-search"></i></button></a>
            </div>
        </div>
    </header>
    {{ $slot }}
    <footer class="footer">
        <div class="container">
            <div class="footer-column">
                <h4>Помощь</h4>
                <ul>
                    <li><a href="{{ route('phones.delivery') }}">Доставка и оплата</a></li>
                    <li><a href="{{ route('phones.warranty') }}">Гарантия</a></li>
                    <li><a href="{{ route('phones.return') }}">Возврат</a></li>
                    <li><a href="{{ route('phones.faq') }}">FAQ</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h4>Контакты</h4>
                <ul>
                    <li><i class="fas fa-phone"></i> 8 (800) 123-45-67</li>
                    <li><i class="fas fa-envelope"></i> info@iphonia.by</li>
                    <li><i class="fas fa-map-marker-alt"></i> Минск, ул. Примерная, 12</li>
                </ul>
            </div>
            <div class="footer-column">
                <h4>Мы в соцсетях</h4>
                <div class="social-links">
                    <a href="#"><i class="fab fa-vk"></i></a>
                    <a href="#"><i class="fab fa-telegram"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <p>© @php echo date('Y') @endphp iPhonia. Все права защищены.</p>
                <a href="http://lemaxdeveloper.su">lemaxdeveloper.su</a>
                <a href="{{ route('phones.confidentiality') }}">Политика конфиденциальности</a>
                <a href="{{ route('phones.user-agreement') }}">Пользовательское соглашение</a>
            </div>
        </div>
    </footer>

    <script>
        // Tab switching
        const tabBtns = document.querySelectorAll('.tab-btn');
        const tabContents = document.querySelectorAll('.tab-content');
        
        tabBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const tabId = btn.getAttribute('data-tab');
                
                // Remove active class from all buttons and contents
                tabBtns.forEach(b => b.classList.remove('active'));
                tabContents.forEach(c => c.classList.remove('active'));
                
                // Add active class to clicked button and corresponding content
                btn.classList.add('active');
                document.getElementById(tabId).classList.add('active');
            });
        });
        
        // Color selection
        const colorOptions = document.querySelectorAll('.color-option');
        colorOptions.forEach(option => {
            option.addEventListener('click', () => {
                colorOptions.forEach(opt => opt.classList.remove('selected'));
                option.classList.add('selected');
                // Здесь можно добавить логику смены основного изображения
            });
        });
        
        // Memory selection
        const memoryOptions = document.querySelectorAll('.memory-option');
        memoryOptions.forEach(option => {
            option.addEventListener('click', () => {
                memoryOptions.forEach(opt => opt.classList.remove('selected'));
                option.classList.add('selected');
                // Здесь можно добавить логику обновления цены
            });
        });
        
        // Thumbnail click
        const thumbnails = document.querySelectorAll('.thumbnail');
        const mainImage = document.querySelector('.main-image');
        
        thumbnails.forEach(thumb => {
            thumb.addEventListener('click', () => {
                // В реальном проекте здесь бы менялся src основного изображения
                mainImage.src = thumb.src;
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            // Обработка аккордеона FAQ
            const faqQuestions = document.querySelectorAll('.faq-question');
            faqQuestions.forEach(question => {
                question.addEventListener('click', function() {
                    const item = this.parentElement;
                    const isActive = item.classList.contains('active');
                    
                    // Закрываем все открытые элементы
                    document.querySelectorAll('.faq-item.active').forEach(activeItem => {
                        if (activeItem !== item) {
                            activeItem.classList.remove('active');
                        }
                    });
                    
                    // Переключаем текущий элемент
                    item.classList.toggle('active', !isActive);
                });
            });

            // Обработка категорий
            const categoryButtons = document.querySelectorAll('.faq-category');
            categoryButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const category = this.getAttribute('data-category');
                    
                    // Активный класс для кнопок
                    categoryButtons.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');
                    
                    // Фильтрация FAQ
                    const faqItems = document.querySelectorAll('.faq-item');
                    faqItems.forEach(item => {
                        const itemCategories = item.getAttribute('data-categories').split(' ');
                        
                        if (category === 'all' || itemCategories.includes(category)) {
                            item.style.display = 'block';
                            setTimeout(() => {
                                item.style.opacity = '1';
                                item.style.transform = 'translateY(0)';
                            }, 50);
                        } else {
                            item.style.opacity = '0';
                            item.style.transform = 'translateY(20px)';
                            setTimeout(() => {
                                item.style.display = 'none';
                            }, 300);
                        }
                    });
                });
            });

            // Поиск по FAQ
            const searchInput = document.querySelector('.faq-search-input');
            const searchButton = document.querySelector('.faq-search-btn');
            
            function performSearch() {
                const query = searchInput.value.toLowerCase().trim();
                if (query) {
                    const faqItems = document.querySelectorAll('.faq-item');
                    let found = false;
                    
                    faqItems.forEach(item => {
                        const question = item.querySelector('.faq-question').textContent.toLowerCase();
                        const answer = item.querySelector('.faq-answer-content').textContent.toLowerCase();
                        
                        if (question.includes(query) || answer.includes(query)) {
                            item.style.display = 'block';
                            item.classList.add('active');
                            found = true;
                            
                            // Подсветка текста
                            const answerContent = item.querySelector('.faq-answer-content');
                            answerContent.innerHTML = answerContent.textContent.replace(
                                new RegExp(query, 'gi'),
                                match => `<span class="search-highlight">${match}</span>`
                            );
                        } else {
                            item.style.display = 'none';
                        }
                    });
                    
                    if (!found) {
                        alert('По вашему запросу ничего не найдено. Попробуйте изменить формулировку.');
                    }
                }
            }
            
            searchButton.addEventListener('click', performSearch);
            searchInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    performSearch();
                }
            });

            // Обработка кнопок контактов
            document.querySelectorAll('.btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    const text = this.textContent.trim();
                    alert(`Функция "${text}" в разработке`);
                });
            });
        });
    </script>
    <script src="{{ asset('js/script.js') }}?v={{ time() }} defer"></script>
</body>
</html>