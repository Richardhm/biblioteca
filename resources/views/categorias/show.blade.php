<x-app-layout>

    @if(count($pdfs) >= 1)

        <div class="py-2">
            <div class="max-w-12xl mx-auto sm:px-6 lg:px-8">
                <div class="dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-5 text-gray-900 dark:text-gray-100">
                        <div class="grid grid-cols-5 gap-2">
                            @foreach($pdfs as $pdf)
                                @if($loop->iteration == 1)
                                    <div style="display: flex;align-items: center;width:55%;margin: 0 auto;">
                                        <img src="{{ asset('storage/' . $categoria->capa) }}" style="width:115px;height:157px;border-radius:10px;position:relative;top:0;left:30px;">
                                    </div>
                                @endif
                                <div style="max-height: 152px;min-height: 152px;" class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 flex flex-col justify-between">
                                    <div class="p-2 flex-grow">

                                        <h5 class="mb-2 h-8 text-sm font-bold tracking-tight text-gray-900 dark:text-white text-justify" style="line-height: 1;">{{ $pdf->titulo }}</h5>

                                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-sm text-justify" style="line-height: 1;">
                                            {{ implode(' ', array_slice(explode(' ', $pdf->descricao ?? ''), 0, 20)) }}{{ str_word_count($pdf->descricao) > 20 ? '...' : '' }}
                                        </p>
                                    </div>
                                    @if(\Illuminate\Support\Facades\Auth::user()->subscribed('default'))
                                        <div class="w-full flex justify-end items-end mt-auto">
                                            <a href="{{ Storage::url($pdf->pdf) }}" class="inline-flex items-center px-1 text-sm font-medium text-center text-white bg-white rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 flex self-end">
                                                <svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 15v2a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3v-2m-8 1V4m0 12-4-4m4 4 4-4"/>
                                                </svg>
                                            </a>
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</x-app-layout>
