<x-layout>
	<x-slot name="title">
		"Результаты поиска iPhone"
	</x-slot>
	
	<main class="main">
        <section class="search-results-header">
            <div class="search-query-info">
                <h1>Результаты поиска</h1>
            </div>
        </section>

        <section class="search-results-content">
            <div class="results-container">
                <div class="results-grid" id="results-view">
                    @foreach($phones as $phone)
                        <div class="product-card">
                            <img src="{{ asset(explode(', ', $phone->imgs)[0]) }}" alt="{{ $phone['title']}}" class="product-img">
                            <h3 class="product-title">{{ $phone['title']}}</h3>
                            <div class="product-price">{{ $phone['price']}} руб</div>
                            <a href="{{ route('phones.buy', ['id' => $phone->id]) }}">
                                <button class="btn btn-sm btn-primary">Купить</button>
                            </a>
                            <a href="{{ route('phones.show', ['id' => $phone->id]) }}">
                                <button class="btn btn-sm btn-primary">Подробнее</button>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="paginate" style="display: flex; justify-content: center;">
                {{ $phones->links('pagination::bootstrap-4') }}  
            </div>
        </section>
    </main>
</x-layout>