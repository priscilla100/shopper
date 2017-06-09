@extends('layout')

@section('content')

<h1>All Products are here</h1>

    @foreach($products as $product)

        <li>{{ $product->name }}</li>


    @endforeach

@stop