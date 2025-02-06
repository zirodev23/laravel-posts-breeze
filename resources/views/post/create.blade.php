<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create new post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="text-gray-900 dark:text-gray-100">
                    <div class="post-form">
                        <form action="/posts" method="post">
                            @csrf
                            
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title">
                            <label for="content">Content</label>
                            <textarea name="content"></textarea>

                            <button type="submit" class="button">Create</button>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>