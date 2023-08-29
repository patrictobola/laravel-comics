<div class="container comicbook">
    <!-- Tag  -->
    <div class="tag">
        <span>Current series</span>
    </div>
    <div class="card-container">
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-2 mb-2">
                    <div class="card border-0">
                        <div class="image delete-bnt-container">
                            <a href="{{ route('comicbooks.show', $comic->id) }}">
                                <img src="{{ $comic['thumb'] ? $comic['thumb'] : asset('images/no_image.png') }}"
                                    alt="{{ $comic['title'] }}">
                            </a>
                            <form method="POST" action="{{ route('comicbooks.destroy', $comic) }}"
                                class="delete-btn delete-controller" data-name="{{ $comic->title }}">
                                @method('DELETE')
                                @csrf
                                <button class="border-0 btn-primary-outline"><i
                                        class="fa-solid fa-x fa-2x"></i></button>
                            </form>
                        </div>
                        <div class="text">{{ $comic['title'] }}</div>
                    </div>
                </div>
            @endforeach
            <div class="text-center d-flex justify-content-center mb-5">
                <a class="btn btn-primary" href="{{ route('comicbooks.create') }}">Upload a new comicbook</a>
            </div>
        </div>
    </div>
</div>
