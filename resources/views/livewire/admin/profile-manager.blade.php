<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Manage Portfolio Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    @if (session()->has('message'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                            <span class="block sm:inline">{{ session('message') }}</span>
                        </div>
                    @endif

                    <form wire:submit.prevent="save">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="mb-4">
                                <label class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Name:</label>
                                <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 dark:text-white dark:bg-gray-900 dark:border-gray-700 leading-tight focus:outline-none" wire:model="name">
                                @error('name') <span class="text-red-500 text-xs">{{ $message }}</span>@enderror
                            </div>
                            
                            <div class="mb-4">
                                <label class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Email:</label>
                                <input type="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 dark:text-white dark:bg-gray-900 dark:border-gray-700 leading-tight focus:outline-none" wire:model="email">
                                @error('email') <span class="text-red-500 text-xs">{{ $message }}</span>@enderror
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Headline:</label>
                                <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 dark:text-white dark:bg-gray-900 dark:border-gray-700 leading-tight focus:outline-none" wire:model="headline">
                                @error('headline') <span class="text-red-500 text-xs">{{ $message }}</span>@enderror
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">GitHub Username:</label>
                                <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 dark:text-white dark:bg-gray-900 dark:border-gray-700 leading-tight focus:outline-none" wire:model="github_username">
                                @error('github_username') <span class="text-red-500 text-xs">{{ $message }}</span>@enderror
                            </div>

                            <div class="mb-4 col-span-1 md:col-span-2">
                                <label class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Short Description:</label>
                                <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 dark:text-white dark:bg-gray-900 dark:border-gray-700 leading-tight focus:outline-none" rows="3" wire:model="description"></textarea>
                                @error('description') <span class="text-red-500 text-xs">{{ $message }}</span>@enderror
                            </div>

                            <div class="mb-4 col-span-1 md:col-span-2">
                                <label class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">About Text:</label>
                                <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 dark:text-white dark:bg-gray-900 dark:border-gray-700 leading-tight focus:outline-none" rows="5" wire:model="about_text"></textarea>
                                @error('about_text') <span class="text-red-500 text-xs">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Save Profile
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
