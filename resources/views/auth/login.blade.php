@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-3">
                    <div class="form-group row">
                        <label for="role" class=" col-form-label text-md-right"><b>{{ __('Login as') }}</b></label>

                        <select name="role" class="form-control form-select form-select-lg" aria-label=".form-select-lg example">
                          <option selected value="Admin">Admin</option>
                          <option value="User">User</option>
                        </select>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <div class="form-group row">
                        <label for="email" class=" col-form-label text-md-right"><b>{{ __('E-Mail Address') }}</b></label>

                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <div class="form-group row">
                        <label for="password" class="col-form-label text-md-right"><b>{{ __('Password') }}</b></label>

                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
               
                <div class="mb-3">
                    <div class="form-group row">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>


                <div class="form-group row mb-3">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-outline-dark">
                            {{ __('Login') }}
                        </button>                       
                    </div>
                </div>

                
            </form>
        </div>
    </div>
</div>
@endsection
