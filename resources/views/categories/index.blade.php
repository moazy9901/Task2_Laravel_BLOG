@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-6">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-gray-800">Categories</h1>
            <a href="{{ route('categories.create') }}"
                class="bg-blue-600 text-white px-4 py-2 rounded shadow hover:bg-blue-700 transition">Add Category</a>
        </div>

        @if(session('success'))
            <script>
                Toastify({
                    text: "{{ session('success') }}",
                    duration: 4000,
                    close: true,
                    gravity: "top",
                    position: "right",
                    style: { background: "linear-gradient(to right, #00b09b, #96c93d)" },
                }).showToast();
            </script>
        @endif

        <div class="overflow-x-auto">
            <table class="min-w-full border border-gray-200 rounded-lg shadow-sm">
                <thead class="bg-gray-100">
                    <tr>
                        <th class=" text-center py-3 text-center text-sm font-semibold text-gray-700">Name</th>
                        <th class="px-6 py-3 text-center text-sm font-semibold text-gray-700">Slug</th>
                        <th class="px-6 py-3 text-center text-sm font-semibold text-gray-700">Meta Title</th>
                        <th class="px-6 py-3 text-center text-sm font-semibold text-gray-700">Image</th>
                        <th class="px-6 py-3 text-center text-sm font-semibold text-gray-700">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($categories as $category)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 text-center py-4 text-gray-800">{{ $category->name }}</td>
                            <td class="px-6 text-center py-4 text-gray-600">{{ $category->slug }}</td>
                            <td class="px-6 text-center py-4 text-gray-600">{{ $category->meta_title }}</td>
                            <td class="px-6 text-center py-4">
                                @if($category->image)
                                    <img src="{{ asset('storage/' . $category->image) }}"
                                        class="w-16 h-16 mx-auto object-cover rounded shadow-sm">
                                @endif
                            </td>
                            <td class="px-6 text-center py-4 space-x-2">
                                <a href="{{ route('categories.show', $category->id) }}"
                                    class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600 transition">show</a>
                                <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="inline">
                                <a href="{{ route('categories.edit', $category->id) }}"
                                    class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600 transition">Edit</a>
                                <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 transition"
                                        onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-6">
            {{ $categories->links() }}
        </div>
    </div>
@endsection