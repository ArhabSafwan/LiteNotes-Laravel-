<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Notes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                @foreach ($notes as $note)
                    <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                        <h2 class="font-bold text-2xl">{{ $note->title }}</h2>
                        <p class="mt-2">{{ $note->text }}</p>
                        <span>{{ $note->updated_at }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
