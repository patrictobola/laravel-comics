@php $books = config('comics') @endphp

<div class="container comicbook">
        <!-- Tag  -->
        <div class="tag">
            <span>Current series</span>
        </div>
        <div class="card-container">
        @foreach ($books as $book )
            <div class="card">
                asd
            </div>
        @endforeach
            <button>LOAD MORE</button>
        </div>
    </div>