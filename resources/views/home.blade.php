{{-- Import main layout  --}}
@extends('layouts/main')

{{-- Change title  --}}
@section('title', 'Comics')

{{-- Main content  --}}
@section('main-content')
    {{-- Comicbook Section  --}}
    @include('includes.comicbook_section.comicbook')
@endsection