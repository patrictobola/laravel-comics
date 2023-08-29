{{-- Import main layout  --}}
@extends('layouts/main')

{{-- Change title  --}}
@section('title', 'Comics')

{{-- Main content  --}}
@section('main-content')
    {{-- Comicbook Section  --}}
    @include('includes.comicbook_section.comicbook_info')

    {{-- Footer section  --}}
    @include('includes.footer.footer')

    {{-- Footer Social section  --}}
    @include('includes.footer.footer_social')
@endsection

@section('scripts')
    <script>
        @vite('resources/js/delete-controller.js')
    </script>

@endsection
