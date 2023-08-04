@php $books = config('comics') @endphp

<div class="image">
        <img :src="books.thumb" :alt="books.series">
    </div>
    <div class="text">Price: {{ books.price }}</div>
    <div class="text">{{ books.series }}</div>