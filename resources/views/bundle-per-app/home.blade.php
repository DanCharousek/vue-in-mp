@extends('bundle-per-app.layout')

@section('content')
    <div id="page-home">
        <h1>Home</h1>
        <h2>@{{ message }}</h2>
        <button @click="changeMessage">Click me</button>
    </div>
@stop