<x-app-layout>
    <x-slot name="header" style="background-color: #ffc107;">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-white text-center">
            {{ __('Categoria de Pesquisa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-12xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100" style="background-color: #ffc107;">

                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6">
                        @foreach($categorias as $cc)
                            <div class="border border-gray-200 rounded-lg shadow bg-white">
                                <a href="{{route('categoria.show',$cc->slug)}}">
                                    <img class="rounded-t-lg w-full h-48 object-cover" src="{{ asset('storage/'.$cc->capa) }}" alt="{{ $cc->nome }}" />
                                </a>
                                <div class="p-5">
                                    <a href="#">
                                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">{{ $cc->nome }}</h5>
                                    </a>


                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
