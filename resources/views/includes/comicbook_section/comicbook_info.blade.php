<div class="bgc">
    <div class="container comicbook-info">
        <!-- Tag  -->
        <div class="tag">
            <figure><img src="{{ $book['thumb']}}" alt="{{ $book['title']}}"></figure>
        </div>
        {{-- product description --}}
        <div class="wrapper">
            <div class="product-container">
                <h1>{{ $book['title']}}</h1>
                {{-- Availabilty section --}}
                <div class="availability">
                    <div class="status">
                        <span>U.S. Price: {{$book['price']}}</span>
                        <span>Available</span>
                    </div>
                    <div class="status-check">
                        <a href="#">Check Availabilty</a>
                    </div>
                </div>
                {{-- Description  --}}
                <p>{{ $book['description']}}</p>
            </div>
            <div class="adv">
                <figure><img src="{{ Vite::asset('resources/images/adv.jpg')}}" alt="ADV image che se ci clicco da ispeziona funziona ma altrimenti non va. Ps. ho provate altre immagini nel path e funzionano"></figure>
            </div>
        </div>

    </div>
</div>
        {{-- product details  --}}
<div class="bgc-details">
    <div class="container">
        <div class="details">
            <div class="talent">
                <h2>Talent</h2>
                <div class="art">
                    <div class="title">Art by:</div>
                    <div>
                    @foreach ($book['artists'] as $writer)
                        <a href="#">{{ $writer}}@if(!$loop->last),@endif
                    @endforeach</a>
                         
                    </div>
                </div>
                <div class="art">
                    <div class="title">Written by:</div>
                    <div>
                    @foreach ($book['writers'] as $writer)
                        <a href="#">{{ $writer}}@if(!$loop->last),@endif
                    @endforeach</a>
                         
                    </div>
                </div>
            </div>
            <div class="specs">
                <h2>Specs</h2>
                <div class="art">
                    <div class="title">Series:</div>
                    <div>
                    <a href="#">{{ $book['series']}}</a>                         
                    </div>
                </div>
                <div class="art">
                    <div class="title">U.S. Price:</div>
                    <div>
                    <span>{{ $book['price']}}</span>                         
                    </div>
                </div>
                <div class="art">
                    <div class="title">On Sale Date:</div>
                    <div>
                    <span>{{ $book['sale_date']}}</span>                         
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
