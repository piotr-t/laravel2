

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/login.css')}}" >
    <title>Login</title>
</head>
<body>
<div class="addWrapper ">
<h1 class="titlePanel">Logging</h1>

<form action="" method="post">


<div class="input-group input-group-sm mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-sm">Login</span>
  </div>
  <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Username</span>
  </div>
  <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
</div>

<div class="input-group input-group-lg">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-lg">Large</span>
  </div>
  <input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
</div>


@if($page)
 <p class="loginTitle">Login:{{$page->name}}</p>


  <p class="alert alert-danger">Id:{{$page->id}}</p>
  @endif

</form>
<button type="button" class="btn btn-primary  btn-lg">Submit</button>
    <div class="wrapper">
    <img src="https://connect2cornerstone.com/wp-content/plugins/profilegrid-user-profiles-groups-and-communities/public/partials/images/default-group.png" alt="default image" >
    </div>
</div>


</body>
</html>










