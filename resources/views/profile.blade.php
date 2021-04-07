@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <form method="POST" action="{{url('/update')}}">
                @csrf

                <input type="hidden" name="id" value="{{$user->id}}">

                <div class="mb-3">
                    <div class="form-group row">
                        <label for="email" class=" col-form-label text-md-right"><b>Name</b></label>

                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <div class="form-group row">
                        <label for="email" class=" col-form-label text-md-right"><b>{{ __('E-Mail Address') }}</b></label>

                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                 <div class="mb-3">
                    <div class="form-group row">
                        <label for="phone" class=" col-form-label text-md-right"><b>Name</b></label>

                        <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $user->phone }}" autocomplete="phone" autofocus>

                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>


              
                <div class="form-group row mb-3">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-outline-dark">
                            {{ __('Update') }}
                        </button>                       
                    </div>
                </div>

                
            </form>
        </div>
    </div>
</div>
@endsection