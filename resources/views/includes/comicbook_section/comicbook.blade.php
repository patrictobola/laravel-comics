<div class="container comicbook">
    <!-- Tag  -->
    <div class="tag">
        <span>Current series</span>
    </div>
    <div class="card-container">
        @foreach ($books as $book)
            <div class="card">
                <div class="image">
                    <a href="{{ route('comicbooks.show', $book->id) }}">
                        <img src="{{ $book['thumb'] }}" alt="{{ $book['title'] }}">
                    </a>
                </div>
                <div class="text">{{ $book['series'] }}</div>
            </div>
        @endforeach
        <button>LOAD MORE</button>
    </div>
</div>
