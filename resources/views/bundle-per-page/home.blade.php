@extends('bundle-per-page.layout')

@section('content')
    <div id="page-home">
        <h1>Home</h1>
        <h2>@{{ message }}</h2>
    </div>
@stop

@push('js')
    <script src="/js/bundle-per-page/home.js"></script>
@endpush