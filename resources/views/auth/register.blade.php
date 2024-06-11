<x-guest-layout>

    <section class="flex w-2/4 flex-wrap justify-center items-center mx-auto rounded-lg p-2" style="background-color: #2d3748;">
        <h4 class="w-full text-4xl text-center py-4 text-white">Cadastrar no Sistema</h4>
        <form method="POST" action="{{ route('register') }}" class="w-full">
            @csrf
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />

            <div class="mb-2">
                <label for="name" class="block mb-1 font-medium text-white dark:text-white text-lg">Nome:</label>
                <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-950 text-lg block w-full p-2.5 focus:border-transparent focus:ring-0 focus:outline-none rounded-lg" required />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <div class="mb-2">
                <label for="email" class="block mb-1 font-medium text-white dark:text-white text-lg">Email:</label>
                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-950 text-lg block w-full p-2.5 focus:border-transparent focus:ring-0 focus:outline-none rounded-lg" required />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="mb-2">
                <label for="password" class="block mb-1 font-medium text-white dark:text-white text-lg">Senha:</label>
                <input type="password" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-950 text-lg block w-full p-2.5 focus:border-transparent focus:ring-0 focus:outline-none rounded-lg" required />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="mb-2">
                <label for="password" class="block mb-1 font-medium text-white dark:text-white text-lg">Confirmar Senha:</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="bg-gray-50 border border-gray-300 text-gray-950 text-lg block w-full p-2.5 focus:border-transparent focus:ring-0 focus:outline-none rounded-lg" required />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <button type="submit" class="bg-white focus:outline-none font-medium mt-2 text-lg w-full px-5 py-2.5 text-center focus:border-transparent focus:ring-0 focus:outline-none rounded-lg text-dark">Cadastrar</button>

        </form>





    </section>





</x-guest-layout>
