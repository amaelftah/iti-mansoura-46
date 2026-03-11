<x-layout>
    <x-slot:title>
        Show Post
    </x-slot>

    <div class="max-w-3xl mx-auto space-y-6">
        <div class="bg-white rounded border border-gray-200">
            <div class="px-4 py-3 bg-gray-50 border-b border-gray-200">
                <h2 class="text-base font-medium text-gray-700">Post Info</h2>
            </div>
            <div class="px-4 py-4">
                <div class="mb-2">
                    <h3 class="text-lg font-medium text-gray-800">Title :- <span class="font-normal">{{ $post['title'] }}</span></h3>
                </div>
                <div>
                    <h3 class="text-lg font-medium text-gray-800">Description :-</h3>
                    <p class="text-gray-600">{{ $post['description'] }}</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded border border-gray-200">
            <div class="px-4 py-3 bg-gray-50 border-b border-gray-200">
                <h2 class="text-base font-medium text-gray-700">Post Creator Info</h2>
            </div>
            <div class="px-4 py-4">
                <div class="mb-2">
                    <h3 class="text-lg font-medium text-gray-800">Name :- <span class="font-normal">{{ $post['creator']['name'] }}</span></h3>
                </div>
                <div class="mb-2">
                    <h3 class="text-lg font-medium text-gray-800">Email :- <span class="font-normal">{{ $post['creator']['email'] }}</span></h3>
                </div>
                <div>
                    <h3 class="text-lg font-medium text-gray-800">Created At :- <span class="font-normal">{{ $post['creator']['created_at'] }}</span></h3>
                </div>
            </div>
        </div>

        <div class="flex justify-end">
            <a href="{{ route('posts.index') }}" class="px-4 py-2 bg-gray-600 text-white font-medium rounded hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                Back to All Posts
            </a>
        </div>
    </div>
</x-layout>
