<div class="container comicbook">
    <!-- Tag  -->
    <div class="tag">
        <span>Current series</span>
    </div>
    <div class="card-container">
        <div class="row">
            @foreach ($books as $book)
                <div class="col-2 mb-2">
                    <div class="card border-0">
                        <div class="image">
                            <a href="{{ route('comicbooks.show', $book->id) }}">
                                <img src="{{ $book['thumb'] }}" alt="{{ $book['title'] }}">
                            </a>
                        </div>
                        <div class="text">{{ $book['series'] }}</div>
                    </div>
                </div>
            @endforeach
            <div class="text-center d-flex justify-content-center mb-5">
                <a class="btn btn-primary" href="{{ route('comicbooks.create') }}">Upload a new comicbook</a>
            </div>
        </div>
    </div>
</div>
