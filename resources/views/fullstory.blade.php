@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container-fluid">
    	<div class="row justify-content-center">
    		
    		<div class="card" >
                    <div class="card-body">
                    <h5 class="card-title">{{$article->title}}</h5>

                    @foreach($user as $u)
                    @if($u->id == $article->user_id)
                    <p style="margin-top: -12px; font-style: italic;"><small>Author: {{$u->name}}</small></p>
                    @endif
                    @endforeach

                    <img src="/storage/{{ $article->image }}" class="card-img-top" alt="..." width="300" height="500">
                    <p class="card-text" style="text-align: justify;">{{$article->description}}
                    </p>


                    <a onclick="goBack()" class="btn btn-outline-dark">Back</a>
                     <br> <br>
                  
                   
                 </div>
            </div>
    		
    	</div>
    	
    </div>
</div>
@endsection
