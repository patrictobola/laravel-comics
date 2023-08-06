{{-- Import main layout  --}}
@extends('layouts/main')

{{-- Change title  --}}
@section('title', 'Comics')

{{-- Main content  --}}
@section('main-content')
    {{-- Comicbook Section  --}}
    @include('includes.comicbook_section.comicbook')

    {{-- Central Menu section  --}}
    @include('includes.central_menu')

    {{-- Footer section  --}}
    @include('includes.footer')
@endsection