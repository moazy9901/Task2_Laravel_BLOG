@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">{{ __('site.edit_article') }}</h1>
        @include('articles.form', [
        'article' => $article,
        'categories' => $categories
    ])
@endsection
