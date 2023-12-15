@extends('layouts.auth')

@section('content')
    <div class="container ">
        <div class="row d-flex justify-content-center ">
            <div class="col-lg-6 pt-5 ">
                <div class="card">
                    <div class="card-body">


                        <x-validation-errors class="mb-4" />

                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf

                            <input type="hidden" name="token" value="{{ $request->route('token') }}">

                            <div class="form-group">
                                <x-label for="email" value="{{ __('Email') }}" />
                                <x-input id="email" class="form-group" type="email" name="email" :value="old('email', $request->email)"
                                    required autofocus autocomplete="username" />
                            </div>

                            <div class="form-group">
                                <x-label for="password" value="{{ __('Password') }}" />
                                <x-input id="password" class="form-control" type="password" name="password" required
                                    autocomplete="new-password" />
                            </div>

                            <div class="form-group">
                                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                                <x-input id="password_confirmation" class="form-control" type="password"
                                    name="password_confirmation" required autocomplete="new-password" />
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <button type="submit" class="btn btn-dark">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
