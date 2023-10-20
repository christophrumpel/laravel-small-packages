@php use App\Support\Enums\PostCategory; @endphp
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create A Post
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <x-alert class="bg-green-700 text-green-100 p-4"/>

                <x-form class="p-8" action="{{ route('create-post') }}">
                    <div class="space-y-12">
                        <div class="border-b border-gray-900/10 pb-12">
                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <div class="sm:col-span-4">
                                    <x-label for="title" class="block text-sm font-medium leading-6 text-gray-900"/>
                                    <x-error field="title" class="text-red-500"/>
                                    <div class="mt-2">
                                        <div
                                            class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                            <x-input name="title" placeholder="My New Post..."
                                                     class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-span-full">
                                    <x-label for="content" class="block text-sm font-medium leading-6 text-gray-900"/>
                                    <x-error field="content" class="text-red-500"/>
                                    <div class="mt-2">
                                        <x-textarea name="content" rows="3"
                                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"/>
                                    </div>
                                    <p class="mt-3 text-sm leading-6 text-gray-600">Write a few sentences about.</p>
                                </div>


                                <div class="sm:col-span-3">
                                    <x-label for="category" class="block text-sm font-medium leading-6 text-gray-900"/>
                                    <x-error field="category" class="text-red-500"/>
                                    <div class="mt-2">
                                        <select id="category" name="category" autocomplete="category-name"
                                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                            <option
                                                value="{{ PostCategory::PUBLISHED->value }}">{{ PostCategory::PUBLISHED }}</option>
                                            <option
                                                value="{{ PostCategory::DRAFT->value }}">{{ PostCategory::DRAFT }}</option>
                                            <option
                                                value="{{ PostCategory::ARCHIVED->value }}">{{ PostCategory::ARCHIVED }}</option>
                                        </select>
                                    </div>
                                </div>


                            </div>
                        </div>


                    </div>

                    <div class="mt-6 flex items-center justify-end gap-x-6">
                        <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                        <button type="submit"
                                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            Save
                        </button>
                    </div>
                </x-form>
            </div>
        </div>
    </div>
</x-app-layout>
