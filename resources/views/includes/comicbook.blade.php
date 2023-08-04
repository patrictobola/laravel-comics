@php $books = config('comics') @endphp

<div class="container comicbook">
        <!-- Tag  -->
        <div class="tag">
            <span>Current series</span>
        </div>
        <div class="card-container">
        @foreach ($books as $book )
            <div class="card">
                <div class="image">
                    <img :src="{{ $book['thumb']}}" :alt="{{ $book['title']}}">
                </div>
                <div class="text">Price: {{ $book['price'] }}</div>
                <div class="text">{{ $book['series'] }}</div>
            </div>
        @endforeach
            <button>LOAD MORE</button>
        </div>
    </div>