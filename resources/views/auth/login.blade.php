@extends('layouts.auth')

@section('content')
    <div class="container pt-5">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-center">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="text-center">Login</h3>
                                
                                <form method="POST" action="{{ route('login') }}" class="form">
                                    @csrf
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input class="form-control" type="email" name="email" :value="old('email')"
                                             autofocus autocomplete="username" />
                                        <x-error for="email" />
                                    </div>
                                    <div class="form-group">
                                        <label for="">Password</label>
                                        <input class="form-control" id="password" type="password" name="password" 
                                            autocomplete="current-password" />
                                            {{bcrypt('root') }}
                                        <x-error for="password" />
                                    </div>
                                    <div class="input-group">
                                        <label for="remember_me" class="">
                                            <x-checkbox id="remember_me" name="remember" />
                                            <span class="ml-2 ">{{ __('Remember me') }}</span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-dark w-100">Login</button>
                                    </div>
                                    @if (Route::has('password.request'))
                                        <div class="form-group"><a href="{{ route('password.request') }}">Forgot
                                                Password?</a>
                                        </div>
                                    @endif

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
