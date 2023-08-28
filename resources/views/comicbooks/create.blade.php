{{-- Import main layout  --}}
@extends('layouts/main')

{{-- Change title  --}}
@section('title', 'Comics')

{{-- Main content  --}}
@section('main-content')

    {{-- Form section  --}}
    <div class="container">
        <form method="POST" action="{{ route('comicbooks.store') }}" norequired>
            <div class="row">

                @csrf
                @if ($errors->any())
                    <div>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="form-group col-6">
                    <label for="title">Titolo fumetto</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror " name="title"
                        id="title" placeholder="Inserisci il titolo">
                    @if ($errors->title)
                        <div class="invalid-feedback">
                            Please a valid title.
                        </div>
                    @endif
                </div>
                <div class="form-group col-6">
                    <label for="price">Inserisci il prezzo</label>
                    <input type="text" class="form-control @error('price') is-invalid @enderror" name="price"
                        id="price" placeholder="es. $9.99">
                    @if ($errors->price)
                        <div class="invalid-feedback">
                            Please insert cost of book.
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="thumb">Inserisci un URL per la copertina</label>
                    <input type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb"
                        id="thumb" placeholder="https://ecc..ecc..">
                    @if ($errors->thumb)
                        <div class="invalid-feedback">
                            Please insert a valid URL.
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="description">Descrivici il fumetto</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                        rows="4"
                        placeholder="Es. Questo fumetto parla di Boolean classe 100 in un futuro prossimo dove ogni studente viene 'promosso'. Parleremo dell'assegnazione dell'attestato di partecipazione, di quanto i nostri tutor ci hanno sopportato e della dedizione che ci hanno messo gli studenti."></textarea>
                    @if ($errors->description)
                        <div class="invalid-feedback">
                            Please insert a valid description.
                        </div>
                    @endif
                </div>
                <div class="form-group col-4">
                    <label for="series">Nome serie</label>
                    <input type="text" class="form-control @error('series') is-invalid @enderror" name="series"
                        id="series" placeholder="Inserisci la serie">
                    @if ($errors->series)
                        <div class="invalid-feedback">
                            Please insert a valid series.
                        </div>
                    @endif
                </div>
                <div class="form-group col-4">
                    <label for="sale_date">Data pubblicazione</label>
                    <input type="date" class="form-control @error('sale_date') is-invalid @enderror" name="sale_date"
                        id="sale_date">
                    @if ($errors->sale_date)
                        <div class="invalid-feedback">
                            Please insert a valid date.
                        </div>
                    @endif
                </div>
                <div class="form-group col-4">
                    <label for="type">Tipo fumetto</label>
                    <select name="type" class="form-control @error('type') is-invalid @enderror" id="type">
                        <option value="comic book">Comic Book</option>
                        <option value="graphic novel">Graphic Novel</option>
                    </select>
                    @if ($errors->type)
                        <div class="invalid-feedback">
                            You have to choose the only 2 options available.
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="artists">Inserisci gli artisti separati da una virgola</label>
                    <input type="text" class="form-control @error('artists') is-invalid @enderror" name="artists"
                        id="artists" placeholder="es. Pinco, Pallo, Pippo, Pluto..">
                    @if ($errors->artists)
                        <div class="invalid-feedback">
                            Please insert valid artists.
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="writers">Inserisci gli scrittori separati da una virgola</label>
                    <input type="text" class="form-control @error('writers') is-invalid @enderror" name="writers"
                        id="writers" placeholder="es. Pinco, Pallo, Pippo, Pluto..">
                    @if ($errors->writers)
                        <div class="invalid-feedback">
                            Please insert valid writers.
                        </div>
                    @endif
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
