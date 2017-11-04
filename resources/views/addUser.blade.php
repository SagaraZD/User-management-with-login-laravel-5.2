@extends('layouts.master')
@include('includes.mainMenu')
@section('content')
  <div class="container">
    <h2>Add Users</h2>
    @include('includes.message-block')
    <form action="{{route('addUserPost')}}" method="post">
      <div class="form-group">
        <label for="text">Username:</label>
        <input type="text" name="username" class="form-control">
      </div>
      <div class="form-group">
        <label for="text">First name:</label>
        <input type="text" name="firstName" class="form-control">
      </div>
      <div class="form-group">
        <label for="text">Last Name:</label>
        <input type="text" name="lastName" class="form-control">
      </div>
      <div class="form-group">
        <label for="text">Email:</label>
        <input type="text" name="email" class="form-control">
      </div>
      <div class="form-group">
        <label for="text">Address:</label>
        <input type="text" name="address" class="form-control">
      </div>

      <button type="submit" class="btn btn-default">Save</button>
       <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </form>

  </div>
@endsection
