<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Manage Educations') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex justify-end mb-4">
                        <button wire:click="create()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add Education</button>
                    </div>

                    @if (session()->has('message'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                            <span class="block sm:inline">{{ session('message') }}</span>
                        </div>
                    @endif

                    <div class="overflow-x-auto">
                        <table class="table-auto w-full border-collapse border border-gray-300 dark:border-gray-600">
                            <thead>
                                <tr class="bg-gray-100 dark:bg-gray-700">
                                    <th class="border border-gray-300 dark:border-gray-600 px-4 py-2">Order</th>
                                    <th class="border border-gray-300 dark:border-gray-600 px-4 py-2">Institution</th>
                                    <th class="border border-gray-300 dark:border-gray-600 px-4 py-2">Major</th>
                                    <th class="border border-gray-300 dark:border-gray-600 px-4 py-2">Degree</th>
                                    <th class="border border-gray-300 dark:border-gray-600 px-4 py-2">Dates</th>
                                    <th class="border border-gray-300 dark:border-gray-600 px-4 py-2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($educations as $edu)
                                <tr>
                                    <td class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-center">{{ $edu->order_number }}</td>
                                    <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">{{ $edu->institution }}</td>
                                    <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">{{ $edu->major }}</td>
                                    <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">{{ $edu->degree }}</td>
                                    <td class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-sm">{{ $edu->start_date }} - {{ $edu->end_date ?? 'Present' }}</td>
                                    <td class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-center">
                                        <button wire:click="edit({{ $edu->id }})" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-1 px-3 rounded">Edit</button>
                                        <button wire:click="delete({{ $edu->id }})" wire:confirm="Are you sure you want to delete this?" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded mt-1">Delete</button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        @if($isOpen)
        <div class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 bg-gray-900/75 transition-opacity" aria-hidden="true"></div>
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                <div class="relative z-20 inline-block align-bottom bg-white dark:bg-gray-800 rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-2xl sm:w-full">
                    <form>
                        <div class="bg-white dark:bg-gray-800 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                            <div class="grid grid-cols-2 gap-4">
                                <div class="mb-4">
                                    <label class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Institution:</label>
                                    <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 dark:text-white dark:bg-gray-900 dark:border-gray-700 leading-tight focus:outline-none" wire:model="institution">
                                    @error('institution') <span class="text-red-500 text-xs">{{ $message }}</span>@enderror
                                </div>
                                <div class="mb-4">
                                    <label class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Major:</label>
                                    <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 dark:text-white dark:bg-gray-900 dark:border-gray-700 leading-tight focus:outline-none" wire:model="major">
                                    @error('major') <span class="text-red-500 text-xs">{{ $message }}</span>@enderror
                                </div>
                                <div class="mb-4">
                                    <label class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Degree:</label>
                                    <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 dark:text-white dark:bg-gray-900 dark:border-gray-700 leading-tight focus:outline-none" wire:model="degree">
                                    @error('degree') <span class="text-red-500 text-xs">{{ $message }}</span>@enderror
                                </div>
                                <div class="mb-4">
                                    <label class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Icon Class:</label>
                                    <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 dark:text-white dark:bg-gray-900 dark:border-gray-700 leading-tight focus:outline-none" wire:model="icon_class">
                                    @error('icon_class') <span class="text-red-500 text-xs">{{ $message }}</span>@enderror
                                </div>
                                <div class="mb-4 col-span-2">
                                    <label class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Description:</label>
                                    <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 dark:text-white dark:bg-gray-900 dark:border-gray-700 leading-tight focus:outline-none" rows="3" wire:model="description"></textarea>
                                    @error('description') <span class="text-red-500 text-xs">{{ $message }}</span>@enderror
                                </div>
                                <div class="mb-4">
                                    <label class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Order Number:</label>
                                    <input type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 dark:text-white dark:bg-gray-900 dark:border-gray-700 leading-tight focus:outline-none" wire:model="order_number">
                                    @error('order_number') <span class="text-red-500 text-xs">{{ $message }}</span>@enderror
                                </div>
                                <div class="mb-4"></div>
                                <div class="mb-4">
                                    <label class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Start Date:</label>
                                    <input type="date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 dark:text-white dark:bg-gray-900 dark:border-gray-700 leading-tight focus:outline-none" wire:model="start_date">
                                    @error('start_date') <span class="text-red-500 text-xs">{{ $message }}</span>@enderror
                                </div>
                                <div class="mb-4">
                                    <label class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">End Date (leave blank if present):</label>
                                    <input type="date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 dark:text-white dark:bg-gray-900 dark:border-gray-700 leading-tight focus:outline-none" wire:model="end_date">
                                    @error('end_date') <span class="text-red-500 text-xs">{{ $message }}</span>@enderror
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 dark:bg-gray-700 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                            <button wire:click.prevent="store()" type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm">
                                Save
                            </button>
                            <button wire:click="closeModal()" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white dark:bg-gray-800 text-base font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                                Cancel
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
