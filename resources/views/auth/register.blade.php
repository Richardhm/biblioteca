<x-guest-layout>

    <section class="flex w-2/4 flex-wrap justify-center items-center mx-auto rounded-lg p-2 bg-gray-100" style="width:380px;">
        <img src="{{asset('logo_vetormenor1.png')}}" class="mx-auto my-2" alt="">
        <form method="POST" action="{{ route('register') }}" class="w-full">
            @csrf
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />

            <div class="mb-2">
                <label for="name" class="block mb-1 font-medium text-gray-950 dark:text-white text-sm" style="color:black;">Nome</label>
                <input type="text" name="name" id="name" style="color:black;" class="bg-gray-50 border border-gray-300 text-gray-950 text-sm block w-full p-2.5 focus:border-transparent focus:ring-0 focus:outline-none rounded-lg" required />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <div class="mb-2">
                <label for="email" class="block mb-1 font-medium text-gray-950 dark:text-white text-sm" style="color:black;">Email</label>
                <input type="email" name="email" id="email" style="color:black;" class="bg-gray-50 border border-gray-300 text-gray-950 text-sm block w-full p-2.5 focus:border-transparent focus:ring-0 focus:outline-none rounded-lg" required />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="mb-2">
                <label for="password" class="block mb-1 font-medium text-gray-950 dark:text-white text-sm" style="color:black;">Senha</label>
                <input type="password" name="password" id="password" style="color:black;" class="bg-gray-50 border border-gray-300 text-gray-950 text-sm block w-full p-2.5 focus:border-transparent focus:ring-0 focus:outline-none rounded-lg" required />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="mb-2">
                <label for="password" class="block mb-1 font-medium text-gray-950 dark:text-white text-sm" style="color:black;">Confirmar Senha</label>
                <input type="password" name="password_confirmation" id="password_confirmation" style="color:black;" class="bg-gray-50 border border-gray-300 text-gray-950 text-sm block w-full p-2.5 focus:border-transparent focus:ring-0 focus:outline-none rounded-lg" required />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="mx-auto my-5 w-full flex justify-center">
                <button type="submit" style="background-color: rgb(9, 116, 122);color:white;margin:0 auto;" class="focus:outline-none font-medium mt-2 text-lg w-2/3 px-5 py-2 text-center focus:border-transparent focus:ring-0 focus:outline-none rounded-lg text-gray-950">CADASTRAR</button>
            </div>

        </form>





    </section>





</x-guest-layout>
