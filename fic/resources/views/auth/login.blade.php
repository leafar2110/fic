@extends('./template')

@section('content')

<div>
    <form class="form-bg width-500" method="POST" action="{{ route('login') }}">
        <p class="h3 text-center">Iniciar sesión</p>
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Correo electrónico')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Contraseña')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Recordar') }}</span>
            </label>
        </div>

        <div class="items-center justify-end mt-4">
            @if (Route::has('password.request'))
            <div class="mb-3">
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100" href="{{ route('register') }}">
                    {{ __('Crear una cuenta') }}
                </a>
            </div>
            @endif

            <button class="btn btn-primary btn-block mb-4 btn-width100 btn-primary-cs">
                {{ __('Iniciar sesión') }}
            </button>
        </div>
    </form>
</div>

@endsection
