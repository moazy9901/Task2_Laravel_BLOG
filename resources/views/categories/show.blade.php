@extends('layouts.app')

@section('content')
    <div class="max-w-6xl mx-auto px-6 py-10">

        <!-- Header -->
        <div class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-3xl font-bold text-gray-800">{{ $category->name }}</h1>
                <p class="text-gray-500 mt-1">Category Details & SEO Information</p>
            </div>

            <div class="flex gap-3">
                <a href="{{ route('categories.edit', $category->id) }}"
                    class="bg-yellow-500 text-white px-5 py-2 rounded-lg shadow hover:bg-yellow-600 transition">
                    Edit
                </a>

                <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Are you sure?')"
                        class="bg-red-500 text-white px-5 py-2 rounded-lg shadow hover:bg-red-600 transition">
                        Delete
                    </button>
                </form>

                <a href="{{ route('categories.index') }}"
                    class="bg-gray-600 text-white px-5 py-2 rounded-lg shadow hover:bg-gray-700 transition">
                    Back
                </a>
            </div>
        </div>

        <!-- Main Card -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">

            <!-- Top Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 p-8">

                <!-- Left: Image -->
                <div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-3">Category Image</h3>

                    @if($category->image)
                        <img src="{{ asset('storage/' . $category->image) }}" class="w-full h-72 object-cover rounded-lg shadow">
                    @else
                        <div class="w-full h-72 bg-gray-100 flex items-center justify-center rounded-lg">
                            <span class="text-gray-400">No Image Uploaded</span>
                        </div>
                    @endif
                </div>

                <!-- Right: Basic Info -->
                 <div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-4">Basic Information</h3>

                    <div class="space-y-4">
                        <div>
                            <p class="text-sm text-gray-500">Name</p>
                            <p class="text-lg font-medium text-gray-800">{{ $category->name }}</p>
                        </div>

                        <div>
                            <p class="text-sm text-gray-500">Slug (URL)</p>
                            <p class="text-lg font-medium text-blue-600">{{ $category->slug }}</p>
                        </div>

                        <div>
                            <p class="text-sm text-gray-500">Created At</p>
                            <p class="text-gray-700">{{ $category->created_at->format('d M Y') }}</p>
                        </div>

                        <div>
                            <p class="text-sm text-gray-500">Last Update</p>
                            <p class="text-gray-700">{{ $category->updated_at->format('d M Y') }}</p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- SEO Section -->
            <div class="border-t bg-gray-50 p-8">

                <h3 class="text-xl font-semibold text-gray-800 mb-6">SEO Meta Data</h3>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    <div class="bg-white p-5 rounded-lg shadow-sm">
                        <p class="text-sm text-gray-500 mb-1">Meta Title</p>
                        <p class="text-gray-800 font-medium">
                            {{ $category->meta_title ?? '— Not set —' }}
                        </p>
                    </div>

                    <div class="bg-white p-5 rounded-lg shadow-sm">
                        <p class="text-sm text-gray-500 mb-1">Meta Keywords</p>
                        <p class="text-gray-800 font-medium">
                            {{ $category->meta_keywords ?? '— Not set —' }}
                        </p>
                    </div>

                    <div class="bg-white p-5 rounded-lg shadow-sm md:col-span-2">
                        <p class="text-sm text-gray-500 mb-1">Meta Description</p>
                        <p class="text-gray-800 leading-relaxed">
                            {{ $category->meta_description ?? '— Not set —' }}
                        </p>
                    </div>

                </div>
            </div>

        </div>

    </div>
@endsection