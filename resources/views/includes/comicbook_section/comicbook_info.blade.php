
<div class="container comicbook-info">
        <!-- Tag  -->
        <div class="tag">
            <figure><img src="{{ $book['thumb']}}" alt="{{ $book['title']}}"></figure>
        </div>
        <div class="wrapper">
            <div class="product-container">
                <h1>{{ $book['title']}}</h1>
                <div class="availability">
                    <div class="status">
                        <span>U.S. Price: {{$book['price']}}</span>
                        <span>Available</span>
                    </div>
                    <div class="status-check">
                        <a href="#">Check Availabilty</a>
                    </div>
                </div>
            </div>
            <div class="adv">
                <figure><img src="{{ Vite::asset('resources/images/adv.jpg')}}" alt="ADV image che se ci clicco da ispeziona funziona ma altrimenti non va. Ps. ho provate altre immagini nel path e funzionano"></figure>
            </div>
        </div>
            <button>LOAD MORE</button>
        </div>
    </div>