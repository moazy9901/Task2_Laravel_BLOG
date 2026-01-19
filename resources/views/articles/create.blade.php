@extends('layouts.app')

@section('content')
    @include('articles.form', ['categories' => $categories])
@endsection