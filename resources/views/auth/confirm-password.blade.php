@extends('layouts.auth')

@section('content')

<div class="card text-white bg-primary">
  <div class="card-body">


    <p>
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </p>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <div class="form-group" > 
            <x-label for="password" value="{{ __('Password') }}" />
            <x-input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" autofocus />
        </div>

        <x-validation-errors class="mb-4" />
        
        <div class="flex justify-content-end mt-4">
            <button type="submit" class="btn btn-dark">
                {{ __('Confirm') }}
            </button>
        </div>
    </form>
  </div>
</div>

@endsection

    {{-- <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>

        <x-validation-errors class="mb-4" />

       
    </x-authentication-card>
</x-guest-layout> --}}
