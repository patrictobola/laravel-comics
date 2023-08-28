{{-- Import main layout  --}}
@extends('layouts/main')

{{-- Change title  --}}
@section('title', 'Comics')

{{-- Main content  --}}
@section('main-content')

    {{-- Form section  --}}
    <div class="container mt-5">
        {{-- TODO Change route  --}}
        <form method="POST" action="{{ route('comicbooks.store') }}">
            <div class="row">

                @csrf
                <div class="form-group col-6">
                    <label for="title">Titolo fumetto</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Inserisci il titolo"
                        value="{{ $comic->title }}" required>
                </div>
                <div class="form-group col-6">
                    <label for="price">Inserisci il prezzo</label>
                    <input type="text" class="form-control" name="price" id="price" placeholder="es. $9.99"
                        value="{{ $comic->price }}" required>
                </div>
                <div class="form-group">
                    <label for="thumb">Inserisci un URL per la copertina</label>
                    <input type="text" class="form-control" name="thumb" id="thumb"
                        placeholder="https://ecc..ecc.." value="{{ $comic->thumb }}">
                </div>
                <div class="form-group">
                    <label for="description">Descrivici il fumetto</label>
                    <textarea class="form-control" id="description" name="description" rows="4"
                        placeholder="Es. Questo fumetto parla di Boolean classe 100 in un futuro prossimo dove ogni studente viene 'promosso'. Parleremo dell'assegnazione dell'attestato di partecipazione, di quanto i nostri tutor ci hanno sopportato e della dedizione che ci hanno messo gli studenti.">{{ $comic->description }}</textarea>
                </div>
                <div class="form-group col-4">
                    <label for="series">Nome serie</label>
                    <input type="text" class="form-control" name="series" id="series"
                        placeholder="Inserisci la serie" value="{{ $comic->series }}">
                </div>
                <div class="form-group col-4">
                    <label for="sale_date">Data pubblicazione</label>
                    <input type="date" class="form-control" name="sale_date" id="sale_date"
                        value="{{ $comic->sale_date }}">
                </div>
                <div class="form-group col-4">
                    <label for="type">Tipo fumetto</label>
                    <select name="type" class="form-control" id="type">
                        <option @if ($comic->type == 'comic book') selected @endif value="comic book">Comic Book
                        </option>
                        <option @if ($comic->type == 'graphic novel') selected @endif value="graphic novel">Graphic
                            Novel</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="artists">Inserisci gli artisti separati da una virgola</label>
                    <input type="text" class="form-control" name="artists" id="artists"
                        placeholder="es. Pinco, Pallo, Pippo, Pluto.." value="{{ $comic->artists }}">
                </div>
                <div class="form-group">
                    <label for="writers">Inserisci gli scrittori separati da una virgola</label>
                    <input type="text" class="form-control" name="writers" id="writers"
                        placeholder="es. Pinco, Pallo, Pippo, Pluto.." value="{{ $comic->writers }}">
                </div>

                <button type="submit" class="btn btn-primary my-5">Submit</button>
            </div>
        </form>
    </div>

    {{-- Footer section  --}}
    @include('includes.footer.footer')

    {{-- Footer Social section  --}}
    @include('includes.footer.footer_social')
@endsection
