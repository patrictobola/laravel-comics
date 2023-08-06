@php $menu_links = config('central_menu'); 
@endphp

<div>
    <div class="container central_menu">
        <ul>
            @foreach ($menu_links as $link)
                <li>
                <a href="#">
                <img src="{{ Vite::asset('resources/images/')}}{{ $link["img"]}}" alt="{{$link['text']}}">
                {{ $link['text'] }}</a></li>
            @endforeach
        </ul>
    </div>
</div>