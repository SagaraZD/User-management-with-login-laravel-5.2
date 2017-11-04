<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">User Manager</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="{{route('users')}}">Home</a></li>
          <li class="active"><a href="{{route('addUserView')}}">Add User</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="{{route('logout')}}"><span class="glyphicon glyphicon-log-in"></span> log Out</a></li>
        </ul>
      </div>
    </div>
  </nav>
