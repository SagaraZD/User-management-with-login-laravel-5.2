@extends('layouts.master')
@section('content')
@include('includes.mainMenu')
  <div class="container">
    <h2>Edit User</h2>
    @include('includes.message-block')
    <form action="{{route('editUserPost')}}" method="post">
      <div class="form-group">
        <label for="text">First name:</label>
        <input type="text" name="firstName" class="form-control" value="{{$user->firstName}}">
      </div>
      <div class="form-group">
        <label for="text">Last Name:</label>
        <input type="text" name="lastName" class="form-control" value="{{$user->lastName}}">
      </div>
      <div class="form-group">
        <label for="text">Email:</label>
        <input type="text" name="email" class="form-control" value="{{$user->email}}">
      </div>
      <div class="form-group">
        <label for="text">Address:</label>
        <input type="text" name="address" class="form-control" value="{{$user->address}}">
      </div>

      <button type="submit" class="btn btn-default">Save</button>
      <input type="hidden" name="id" value="{{$user->id}}">
       <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </form>

  </div>
@endsection
