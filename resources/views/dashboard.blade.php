<x-app-layout>
    <x-slot name="header" class="bg-gray-100">
        <h2 class="font-semibold text-gray-800 text-white text-center">
            <span style="font-size: 35px;">Categoria de Pesquisa</span>
        </h2>
    </x-slot>

    <div class="w-full flex justify-center" style="height:100vh;">
        <div class="p-2 text-gray-900">
            <div class="categorias-container" style="display:flex;flex-wrap:wrap;padding:0 250px;">
                @foreach($categorias as $cc)
                    <div class="categoria-item" style="flex: 0 0 calc(100% / 10);box-sizing:border-box;margin-bottom:5px;padding:5px;border-radius:5px;height:150px;">
                        <a href="{{ route('categoria.show', $cc->slug) }}" style="border-radius:5px;border-radius:5px;height:500px;">
                            <img style="width:100%;height:100%;border-radius:5px;" src="{{ asset('storage/'.$cc->capa) }}" alt="{{ $cc->nome }}" />
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
