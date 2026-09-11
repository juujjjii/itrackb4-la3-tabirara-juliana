@extends('layouts.app')

@section('title', $book['title'])

@section('content')
    <h1>{{ $book['title'] }}</h1>
    <ul class="list-group" style="max-width: 24rem;">
        <li class="list-group-item">ID:{{ $book['id'] }}</li>
        <li class="list-group-item">ISBN:{{ $book['isbn'] }}</li>
        <li class="list-group-item">Author:{{ $book['author'] }}</li>
        <li class="list-group-item">Pages:{{ $book['pages'] }}</li>
    </ul>

    <a href="{{ route('books.index') }}" class="btn btn-secondary mt-3">← Back to Book List</a>
@endsection