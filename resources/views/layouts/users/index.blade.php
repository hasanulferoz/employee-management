@extends('layouts.main')



@section('content')

       <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Users</h1>
    </div>
   <div class="row">
    <div class="card mx-auto">
        <div>
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{session('message')}}
                </div>
            @endif
        </div>
        <div class="card-header">
           <div class="row">
               <div class="col">
                <form method="GET" action="{{route('users.index')}}">
                    <div class="form-row align-items-center">
                      <div class="col">
                        <input type="Search" class="form-control" name="search" class="form-control mb-2" id="inlineFormInput" placeholder=" searce user">
                      </div>

                      <div class="col">
                       <button class="btn btn-primary btn-sm mb-2">Search</button>  
                      </div>
                    </div>
                  </form>
                 
               </div>
           </div>
           <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm mb-2">Create</a>
        </div>
       
        <div class="card-header">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#Id</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Manage</th>
                  </tr>
                </thead>
                <tbody>
                 @foreach($users as $user)
                    <tr>
                        <th scope="row">{{$user->id}}</th>
                        <td>{{$user->username}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            <a href="{{route('users.edit', $user->id )}}" class="btn btn-success btn-sm">Edit</a>
                        </td>
                    </tr>

                 @endforeach
                </tbody>
              </table>
        </div>
    </div>
   </div>

@endsection