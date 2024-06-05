<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-center text-white">{{ $categoria->nome }}</h2>
    </x-slot>
    @if(count($pdfs) >= 1)
        <div class="py-12">
            <div class="max-w-12xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h3 class="text-lg font-semibold mb-4">Categoria {{ $categoria->nome }} <small>Os PDF aqui servem como referencia.</small> </h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6">

                            @foreach($pdfs as $pdf)
                                <div class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                    <div class="p-5">
                                        <a href="#">
                                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $pdf->titulo }}</h5>
                                        </a>
                                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                            {{ implode(' ', array_slice(explode(' ', $pdf->descricao ?? ''), 0, 20)) }}{{ str_word_count($pdf->descricao) > 20 ? '...' : '' }}
                                        </p>
                                        @if(\Illuminate\Support\Facades\Auth::user()->subscribed('default'))
                                            <a href="{{ Storage::url($pdf->pdf) }}" target="_blank" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                   Download
                                                 <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                                </svg>
                                            </a>
                                        @else
                                            <a href="route('subscribe')" style="margin-left:20px;text-color:white;display:flex;align-items: center;">
                                                <span style="border:1px solid black;padding:0 10px;border-radius: 5px;background-color:#123449;color:white;">Assinatura</span>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</x-app-layout>
