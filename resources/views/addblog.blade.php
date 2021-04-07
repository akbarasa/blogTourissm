@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
        	<center>
        		<h4>
        			New Blog
        		</h4>
        	</center>

            <form method="POST" action="{{url('/add')}}"  enctype="multipart/form-data">
                @csrf
        	
                <input type="hidden" name="userId" value="{{Auth::user()->id}}">

                <div class="mb-3">
                    <div class="form-group row">
                        <label for="title" class=" col-form-label text-md-right"><b>Title</b></label>

                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" autocomplete="title" autofocus>

                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <div class="form-group row">
                        <label for="category" class=" col-form-label text-md-right"><b>Category</b></label>

                       	<select name="category" class="form-control form-select form-select-lg" aria-label=".form-select-lg example">
                       		@foreach($category as $c)
	                      	<option value="{{$c->id}}">{{$c->name}}</option>
	                      	@endforeach
	                     
                        </select>

                        @error('category')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <div class="form-group row">
                        <label for="photo" class=" col-form-label text-md-right"><b>Photo</b></label>

                        <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image"   accept="image/gif, image/jpeg, image/png, image/jpg" required>

                        @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <div class="form-group row">
                        <label for="description" class=" col-form-label text-md-right"><b>Story</b></label>

                        <textarea class="form-control @error('desc')is-invalid @enderror" name="desc" rows="10"></textarea>

                      
                        @error('desc')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

              
                <div class="form-group row mb-3">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-outline-dark">
                            {{ __('Create') }}
                        </button>                       
                    </div>
                </div>

                
            </form>
        </div>
    </div>
</div>
@endsection