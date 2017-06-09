@extends('layout')

@section('content')

    <h1>{{ $product->name }}</h1>

    @foreach($product->images as $product)

        <li>{{ $product->name }}</li>


    @endforeach

@stop