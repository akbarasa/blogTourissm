@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        @if(Auth::user())
        <h4>Welcome, {{ Auth::user()->name }}</h4>
        @endif
    </div>
    <br>

    @foreach($category as $ca)
    @if($article[0]->category_id == $ca->id)
    <h6 style="margin-top: -20px; float: right;">{{$ca->name}}</h6>
    @endif
    @endforeach
    <br>
    
    <div class="container-fluid">    
        <div class="row">
            @foreach($article as $a)
    		<div class="col-mb-3">
    			<div class="card" style="width: 340px;margin: 10px;">
					<div class="card-body">
				 	 	<h5 class="card-title">{{$a->title}}</h5>
					    <p class="card-text" style=" display: -webkit-box;-webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis; text-align: justify;">{{$a->description}}
					    </p>
					    <a href="{{url('/fullStory/'.$a->id)}}" class="btn btn-outline-dark">Full Story</a>
					     <br> <br>
					   
                        @foreach($category as $c)
                        @if($a->category_id == $c->id)
					    <p>Category : <a href="{{url('/category/'.$a->category_id)}}" style="font-style: italic;">{{$c->name}}</a> </p>
					    @endif
                        @endforeach
					 </div>
				</div>
    		</div>
           @endforeach
           
    	</div>
    	
    </div>
</div>
@endsection
