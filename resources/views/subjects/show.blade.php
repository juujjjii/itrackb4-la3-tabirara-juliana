@extends('layouts.app')

@section('title', $product->name)

@section('content')
    <h2>{{ $product->name }}</h2>
    <p>{{ $product->description }}</p>
    <p>Price: ${{ $product->price }}</p>
@endsection