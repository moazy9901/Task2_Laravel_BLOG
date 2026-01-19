<nav class="bg-white border-b border-gray-200 shadow-sm">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between h-16 items-center">

            <!-- Logo -->
            <div class="flex items-center space-x-8">
                <a href="/" class="text-xl font-bold text-indigo-600">
                    {{ __('site.MyBlog') }}
                </a>

                <!-- Main Links -->
                <div class="hidden md:flex space-x-6">
                    <a href="{{ route('articles.index') }}"
                        class="text-gray-600 hover:text-indigo-600 font-medium transition">
                        {{ __('site.articles') }}
                    </a>

                    <a href="{{ route('categories.index') }}"
                        class="text-gray-600 hover:text-indigo-600 font-medium transition">
                        {{ __('site.categories') }}
                    </a>
                </div>
            </div>

            <!-- Right Side -->
            <div class="flex items-center space-x-6">

                <!-- Language Dropdown -->
                <div class="relative group">
                    <button class="flex items-center gap-2 text-gray-600 hover:text-indigo-600 font-medium transition">
                        🌍 {{ __('site.language') }}
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>

                    <!-- Dropdown Menu -->
                    <div
                        class="absolute right-0 mt-2 w-40 bg-white border border-gray-200 rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">

                        <a href="{{ route('language.en') }}"
                            class="block px-4 py-2 text-gray-600 hover:bg-indigo-50 hover:text-indigo-600">
                            🇬🇧 {{ __('site.english') }}
                        </a>

                        <a href="{{ route('language.ar') }}"
                            class="block px-4 py-2 text-gray-600 hover:bg-indigo-50 hover:text-indigo-600">
                            🇪🇬 {{ __('site.arabic') }}
                        </a>
                    </div>
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="md:hidden text-gray-600 hover:text-indigo-600 focus:outline-none">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>

            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden border-t border-gray-200">
        <div class="px-4 py-4 space-y-3 bg-white">

            <a href="{{ route('articles.index') }}" class="block text-gray-600 hover:text-indigo-600 font-medium">
                {{ __('site.articles') }}
            </a>

            <a href="{{ route('categories.index') }}" class="block text-gray-600 hover:text-indigo-600 font-medium">
                {{ __('site.categories') }}
            </a>

            <div class="border-t pt-3">
                <p class="text-sm text-gray-400 mb-2">{{ __('site.language') }}</p>
                <a href="{{ route('language.en') }}" class="block py-1 text-gray-600">{{ __('site.english') }}</a>
                <a href="{{ route('language.ar') }}" class="block py-1 text-gray-600">{{ __('site.arabic') }}</a>
            </div>
        </div>
    </div>
</nav>