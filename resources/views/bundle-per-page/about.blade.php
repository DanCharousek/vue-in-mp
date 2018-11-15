@extends('bundle-per-page.layout')

@section('content')
    <div id="page-about">
        <h1>About</h1>
        <h2>@{{ message }}</h2>
    </div>
@stop

@push('js')
    <script src="/js/bundle-per-page/about.js"></script>
@endpush