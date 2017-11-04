@extends('layouts.master')
@section('content')
@include('includes.mainMenu')
  <div class="container">
    <h2>All Users</h2>
      @include('includes.message-block')
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Firstname</th>
          <th>Lastname</th>
          <th>Email</th>
          <th>Address</th>
          <th>Added date</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($users as $userInfo)
        <tr>
          <td>{{$userInfo->firstName}}</td>
          <td>{{$userInfo->lastName}}</td>
          <td>{{$userInfo->email}}</td>
          <td>{{$userInfo->address}}</td>
          <td>{{$userInfo->created_at	}}</td>
          <td>
            <a href="{{route('addUserView')}}"> Add</a>
            <a href="{{route('editUserView', ['id'=>$userInfo->id]) }}">Edit </a>
            <a href="{{route('deleteUser', ['id'=>$userInfo->id]) }}">Delete </a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
