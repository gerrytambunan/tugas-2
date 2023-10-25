<x-guest-layout>
    <x-slot name="title">
        Register
    </x-slot>

    <x-auth-card>
    
        {{-- show alert if there is errors --}}
        <x-alert-error/>

        <x-slot name="title">
            Daftar
        </x-slot>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <!-- Name field -->
            <x-input type="text" text="Nama" name="name" />

            <!-- Email field -->
            <x-input type="text" text="Username" name="username" />

            <!-- Password field -->
            <x-input type="password" text="Password" name="password" />

            <!-- Password confirmation field -->
            <x-input type="password" text="Konfirmasi Password" name="password_confirmation" />
            
            <x-button type="primary btn-block" text="Daftar" for="submit" />
        </form>
        <div class="text-center mt-4">
            <hr>
            <a class="font-weight-bold small" href="{{ route('login') }}">Sudah Punya Akun?</a>
        </div>
    </x-auth-card>
</x-guest-layout>
