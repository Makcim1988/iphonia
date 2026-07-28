<x-layout>
	<x-slot name="title">
		"Поиск iPhone"
	</x-slot>
	
	<main class="main">
        <section class="search-hero">
            <div class="container">
                <h1>Поиск товаров</h1>
                <div class="search-container">
                    <form method="GET" action="{{ route('phones.result') }}" >
                        <input type="text" name="title" class="search-input" placeholder="Найти iPhone" value="iPhone 16" require>
                        <button type="submit" class="search-button">
                            <i class="fas fa-search"></i>
                        </button>
                    <form>
                </div>
            </div>
        </section>
    </main>
</x-layout>