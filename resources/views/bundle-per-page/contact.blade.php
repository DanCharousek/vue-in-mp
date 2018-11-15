@extends('bundle-per-page.layout')

@section('content')
    <div id="page-contact">
        <h1>Contact</h1>
        <h2>@{{ message }}</h2>
    </div>
@stop

@push('js')
    <script src="/js/bundle-per-page/contact.js"></script>
@endpush