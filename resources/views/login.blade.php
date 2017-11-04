<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
      <h2>Login</h2>
      @include('includes.message-block')
      <form action="{{route('loginPost')}}" method="post">
        <div class="form-group">
          <label for="text">Username:</label>
          <input type="text" name="username" class="form-control">
        </div>
        <div class="form-group">
          <label for="text">Password:</label>
          <input type="password" name="user_password" class="form-control">
        </div>
        <button type="submit" class="btn btn-default">Login</button>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
      </form>
    </div>
    <div class="col-md-4">
    </div>


  </div>
</body>
</html>
