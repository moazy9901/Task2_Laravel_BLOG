<form action="{{ $category->exists ? route('categories.update', $category->id) : route('categories.store') }}"
    method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-lg shadow-md">
    @csrf
    @if($category->exists)
        @method('PUT')
    @endif

    <div class="mb-4">
        <label class="block text-gray-700 font-semibold mb-1">Name <span class="text-red-500">*</span></label>
        <input type="text" name="name" value="{{ old('name', $category->name) }}"
            class="w-full border rounded-lg p-2 focus:ring focus:ring-blue-200">
        @error('name') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 font-semibold mb-1">Slug</label>
        <input type="text" name="slug" value="{{ old('slug', $category->slug) }}"
            class="w-full border rounded-lg p-2 focus:ring focus:ring-blue-200">
        @error('slug') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 font-semibold mb-1">Image</label>
        <input type="file" name="image" class="w-full">
        @if($category->image)
            <img src="{{ asset('storage/' . $category->image) }}" class="w-32 h-32 object-cover mt-2 rounded shadow-sm">
        @endif
        @error('image') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 font-semibold mb-1">Meta Title</label>
        <input type="text" name="meta_title" value="{{ old('meta_title', $category->meta_title) }}"
            class="w-full border rounded-lg p-2 focus:ring focus:ring-blue-200">
        @error('meta_title') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 font-semibold mb-1">Meta Description</label>
        <textarea name="meta_description"
            class="w-full border rounded-lg p-2 focus:ring focus:ring-blue-200">{{ old('meta_description', $category->meta_description) }}</textarea>
        @error('meta_description') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 font-semibold mb-1">Meta Keywords</label>
        <input type="text" name="meta_keywords" value="{{ old('meta_keywords', $category->meta_keywords) }}"
            class="w-full border rounded-lg p-2 focus:ring focus:ring-blue-200">
        @error('meta_keywords') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
    </div>

    <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">
        {{ $category->exists ? 'Update Category' : 'Create Category' }}
    </button>
</form>