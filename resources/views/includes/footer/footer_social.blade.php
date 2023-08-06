@php $social_links = config('social_info') @endphp

<section class="footer_social">
        <div class="container">
            <div>
                <button>SIGN-UP NOW!</button>
            </div>
            <div>
                <span>FOLLOW US</span>
                <ul>
                    @foreach ($social_links as $link)
                    <li>
                        <a href="{{ $link['url']}}">
                            <img src="{{ Vite::asset('resources/images/')}}{{ $link['img']}}" alt="{{ $link['title']}} Icon">
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
</section>