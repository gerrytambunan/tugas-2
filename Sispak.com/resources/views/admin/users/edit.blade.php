<x-app-layout>
    <x-slot name="title">Edit Admin</x-slot>

    {{-- show alert if there is errors --}}
    <x-alert-error />

    <x-card>
        <form action="{{ route('admin.member.update', $user->id) }}" method="post">
            @csrf

            <div class="row">
                <div class="col-md-6">
                    <x-input text="Name" name="name" type="text" value="{{ $user->name }}" />
                </div>
                <div class="col-md-6">
                    <x-input text="Username" name="username" type="text" value="{{ $user->username }}" />
                </div>
            </div>


            <div class="row">
                <div class="col-md-6">
                    <x-input text="Password" name="password" type="password" />
                </div>
                <div class="col-md-6">
                    <x-input text="Konfirmasi Password" name="confirm-password" type="password" />
                </div>
            </div>

            <x-button type="primary" text="Submit" for="submit" />

        </form>
    </x-card>
</x-app-layout>
