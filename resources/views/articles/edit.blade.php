@extends('layouts.app')

@section('content')
    @include('articles.form', [
        'article' => $article,
        'categories' => $categories
    ])
@endsection
