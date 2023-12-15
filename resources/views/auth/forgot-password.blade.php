@extends('layouts.auth')

@section('content')
    <div class="container ">
        <div class="row d-flex justify-content-center " >
            <div class="col-lg-6 pt-5 ">
                <div class="card">
                    <div class="card-body">


                        <div class="mb-4 text-sm text-gray-600">
                            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                        </div>

                        @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif

                        <x-validation-errors class="mb-4" />

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="form-group">
                                <x-label for="email" value="{{ __('Email') }}" />
                                <x-input id="email" class="form-control" type="email" name="email"
                                    :value="old('email')" required autofocus autocomplete="username" />
                            </div>

                            <div class="flex items-center justify-content-end mt-4">
                                <button type="submit" class="btn btn-dark" >
                                    {{ __('Email Password Reset Link') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
