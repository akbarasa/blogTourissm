@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
           <div class="container-fluid mt-4">
               <div class="row justify-content-center">
                  <div class="col-md-8">
                    <center>
                      <table class="table text-centered">
                          <thead>
                                <th scope="col" style="width: 40%;">Name</th>
                                <th scope="col" style="width: 50%;">Email</th>
                                <th scope="col" style="width: 10%;">Action</th>
                          </thead>
                          <tbody>
                              @foreach($user as $u)
                              <tr>
                                  <td scope="col">
                                      {{$u->name}}
                                  </td>
                                   <td scope="col">
                                      {{$u->email}}
                                  </td>
                                  <td scope="col">
                                      <a href="{{url('/delete_user/'.$u->id)}}" class="btn btn-danger">
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
