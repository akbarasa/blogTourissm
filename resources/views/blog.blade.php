@extends('layouts.app')

@section('content')
<div class="container">
       
        <div class="row justify-content-center">
           <div class="container-fluid">
           		<center>
           			<a href="{{url('/addBlog')}}" class="btn btn-outline-dark">
	           			+ Create Blog
	           		</a>
           		</center>
           		<br>
              <div class="row justify-content-center">
                <div class="col-md-8">
                  <center>
                    <table class="table text-centered">
                        <thead>
                              <th scope="col" style="width: 100%;">
                                <center>
                                  Title
                                </center>
                              </th>
                              <th scope="col">
                                <center>
                                  Action
                                </center>
                              </th>
                        </thead>
                        <tbody>
                        @foreach($article as $a)
                        <tr>
                            <td scope="col">
                                {{$a->title}}
                            </td>
                            <td scope="col">
                                <a href="{{url('/delete_blog/'.$a->id)}}" class="btn btn-danger">
                                    Delete
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                  </center>
                </div>
                 
                 
               </div>
           </div>
        </div>
</div>

@endsection