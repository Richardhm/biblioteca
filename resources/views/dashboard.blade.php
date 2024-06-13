<x-app-layout>

    <x-slot name="header" class="bg-gray-100">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-white text-center">
            {{ __('Categoria de Pesquisa') }}
        </h2>
    </x-slot>

    <div>
        <div class="w-full sm:px-6 flex items-start justify-center">
            <div class="dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex flex-wrap justify-center w-full lg:w-full sm:w-full">
                        @foreach($categorias as $cc)
                            <div class="flex flex-wrap mb-4" style="flex-basis:13%;">
                                <a href="{{ route('categoria.show', $cc->slug) }}">
                                    <img class="rounded-lg w-full h-64" src="{{ asset('storage/'.$cc->capa) }}" alt="{{ $cc->nome }}" />
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>







</x-app-layout>
