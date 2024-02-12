<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Notes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="flex">
                <p>Cerated:{{ $note->created_at->diffForHumans() }}</p>
                <p class="ml-4">Updated:{{ $note->updated_at->diffForHumans() }}</p>
            </div>
            <div class="flex">
                <a href="{{ route('notes.edit',  $note->id) }}"><x-button class="ml-auto">Edit</x-button></a>
            </div>
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <h2 class="font-bold text-2xl">
                    {{ $note->title }}
                </h2>
                <p class="mt-2">
                    {{ $note->text }}
                </p>
            </div>

        </div>
    </div>
</x-app-layout>
