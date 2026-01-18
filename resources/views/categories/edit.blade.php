@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Edit Category</h1>
        @include('categories.form', ['category' => $category])
    </div>
@endsection