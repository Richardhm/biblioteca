<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <section class="flex w-full justify-center items-center">
        <div class="p-2 text-white rounded-lg bg-gray-100" style="width:380px;">
            <img src="{{asset('logo_vetormenor1.png')}}" class="mx-auto my-2" alt="">
            <form method="POST" action="{{ route('login') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <div class="mb-2">
                    <label for="email" class="block mb-1 font-medium text-gray-950 dark:text-white text-sm" style="color:black;">Email</label>
                    <input type="email" name="email" id="email" style="color:black;" class="bg-gray-50 border border-gray-300 text-gray-950 text-sm block w-full p-2.5 focus:border-transparent focus:ring-0 focus:outline-none rounded-lg" required />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div class="mb-2">
                    <label for="password" class="block mb-1 font-medium dark:text-white text-sm text-gray-950" style="color:black;">Senha</label>
                    <div class="relative">
                        <input type="password" name="password" id="password" style="color:black;" class="bg-gray-50 border text-gray-950 border-gray-300 text-sm block w-full p-2.5 focus:border-transparent focus:ring-0 focus:outline-none rounded-lg" required />
                        <button type="button" id="togglePassword" class="absolute right-2 top-2 cursor-pointer" style="color:black;">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" id="showIcon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 hidden" id="hideIcon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88" />
                            </svg>
                        </button>
                    </div>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="flex justify-between">
                    <div>
                        <input type="checkbox" class="text-gray-950">
                        <span style="color:black;" class="text-sm">Lembrar-me</span>
                    </div>
                    <div>
                        <a href="" style="color:black;text-decoration: underline;" class="text-sm">Esqueceu a Senha?</a>
                    </div>
                </div>





                <div class="mx-auto my-5 w-full flex justify-center">
                    <button type="submit" style="background-color: rgb(9, 116, 122);color:white;margin:0 auto;" class="focus:outline-none font-medium mt-2 text-lg w-2/3 px-5 py-2 text-center focus:border-transparent focus:ring-0 focus:outline-none rounded-lg text-gray-950">LOGIN</button>
                </div>

            </form>

            <div class="flex justify-center">

                <a href="{{route('register')}}" class="p-2 rounded-lg text-sm" style="color: #1a202c;border:1px solid black;"> CRIAR CONTA</a>
            </div>






        </div>

        <script>

            const passwordInput = document.getElementById('password');
            const toggleButton = document.getElementById('togglePassword');
            const showIcon = document.getElementById('showIcon');
            const hideIcon = document.getElementById('hideIcon');

            toggleButton.addEventListener('click', () => {
                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    showIcon.style.display = 'none';
                    hideIcon.style.display = 'block';
                } else {
                    passwordInput.type = 'password';
                    showIcon.style.display = 'block';
                    hideIcon.style.display = 'none';
                }
            });

        </script>

    </section>

</x-guest-layout>
