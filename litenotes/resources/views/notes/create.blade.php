<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Notes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <form action="{{ route('notes.store') }}"method='post'>
                @csrf

                <x-input type="text" name="title" field="title" placeholder="Title" class="w-full" autocomplete="off"
                    :value="@old('title')"></x-input>
                <textarea name="text" rows="10" field="text" placeholder="Start typing here..." class="w-full mt-6"
                    :value="@old('text')"class="w-full mt-5 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"></textarea>
                <x-button class="mt-5">Save</x-button>


            </form>

        </div>
    </div>
</x-app-layout>
