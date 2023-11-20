<div class="h-screen flex justify-center items-center">
    <x-guest-layout>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <div class="py-6 sm:py-8 lg:py-12">
            <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
                {{-- <img src="{{ asset('img/coffee-machine.png') }}" alt="" class="w-24 mx-auto text-center"> --}}

                <h2 class="mb-2 text-center text-2xl font-bold text-gray-800 md:mb-4 lg:text-3xl">
                    CoffeEにログイン
                </h2>

                <div class="relative flex items-center justify-center">
                    <span class="absolute inset-x-0 h-px bg-gray-300"></span>
                </div>

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="flex flex-col gap-4 p-4 md:p-8">
                        <!-- Email Address -->
                        <div>
                            <x-input-label for="email" :value="__('メールアドレス')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="mt-2">
                            <x-input-label for="password" :value="__('パスワード')" />
                            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-2">
                            @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2" href="{{ route('password.request') }}">
                                {{ __('パスワードを忘れましたか?') }}
                            </a>
                            @endif
                        </div>
                        <!-- Remember Me -->
                        <div class="block mt-2">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-yellow-500 shadow-sm focus:ring-yellow-500" name="remember">
                                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </label>
                        </div>


                        <button class="block rounded-lg bg-yellow-500 hover:bg-yellow-600 px-8 py-2 text-center font-semibold text-white outline-none transition">
                            Log in
                        </button>

                        <div class="relative flex items-center justify-center">
                            <span class="absolute inset-x-0 h-px bg-gray-300"></span>
                            <span class="relative bg-white px-4 text-sm text-gray-400">Log in with social</span>
                        </div>

                        <button class="flex items-center justify-center gap-2 rounded-lg border border-gray-300 bg-white px-8 py-3 text-center text-sm font-semibold text-gray-800 outline-none ring-gray-300 transition duration-100 hover:bg-gray-100 focus-visible:ring active:bg-gray-200 md:text-base">
                            <svg class="h-5 w-5 shrink-0" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M23.7449 12.27C23.7449 11.48 23.6749 10.73 23.5549 10H12.2549V14.51H18.7249C18.4349 15.99 17.5849 17.24 16.3249 18.09V21.09H20.1849C22.4449 19 23.7449 15.92 23.7449 12.27Z" fill="#4285F4" />
                                <path d="M12.2549 24C15.4949 24 18.2049 22.92 20.1849 21.09L16.3249 18.09C15.2449 18.81 13.8749 19.25 12.2549 19.25C9.12492 19.25 6.47492 17.14 5.52492 14.29H1.54492V17.38C3.51492 21.3 7.56492 24 12.2549 24Z" fill="#34A853" />
                                <path d="M5.52488 14.29C5.27488 13.57 5.14488 12.8 5.14488 12C5.14488 11.2 5.28488 10.43 5.52488 9.71V6.62H1.54488C0.724882 8.24 0.254883 10.06 0.254883 12C0.254883 13.94 0.724882 15.76 1.54488 17.38L5.52488 14.29Z" fill="#FBBC05" />
                                <path d="M12.2549 4.75C14.0249 4.75 15.6049 5.36 16.8549 6.55L20.2749 3.13C18.2049 1.19 15.4949 0 12.2549 0C7.56492 0 3.51492 2.7 1.54492 6.62L5.52492 9.71C6.47492 6.86 9.12492 4.75 12.2549 4.75Z" fill="#EA4335" />
                            </svg>
                            Continue with Google
                        </button>
                    </div>

                    <div class="flex items-center justify-center bg-gray-100 p-4">
                        <p class="text-center text-sm text-gray-500">アカウントを作成していませんか?
                            <a href="{{ route('register') }}" class="text-yellow-500 transition duration-100 hover:text-yellow-600 active:text-yellow-700">
                                Sign up
                            </a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </x-guest-layout>
</div>