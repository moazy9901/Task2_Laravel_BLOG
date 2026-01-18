@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Add Category</h1>
        @include('categories.form', ['category' => new \App\Models\Category()])
    </div>
@endsection