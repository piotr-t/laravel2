
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administrator panel</title>
    <link rel="stylesheet" href="{{asset('css/administarator.css')}}" >
</head>

<body class="container-fluid">


<div class="header row">
<div class="title col-sm-8">
<h1 class="administratorPanel ">Administrator Panel</h1>
</div>
<div class="user col-sm-2">
        <p class="col-sm-2 align-self-end alert alert-primary">Zalogowany użytkownik: {{$page2[0]->name}}</p>
    </div>

    <div class="user row justify-content-end">
        <a class="col-sm-2 align-self-end alert alert-primary" href="{{ url('/login') }}" class="LogOut">Wyloguj Się</a>
    </div>
</div>




<div class="row r1" >
<div class="aside col-sm-3">
  <p>search:</p>  <input type="text">
<ul class="assetList" type="none">
@foreach ($page1 as $i)
<li class="sort"><input type="checkbox" name="check" id="c">  {{$i->name}}</li>
@endforeach
</ul>
</div>
<div class="content col-sm-9">
        @yield("footer")
<p> Content</p>
<button  class="btn btn-outline-primary">Zarządzaj produktami</button>
<button class="btn btn-outline-primary">Dodaj produkt</button>
<button class="btn btn-outline-primary">Usuń produkt</button>
<button class="btn btn-outline-primary">Zarządzaj kontem</button>

<input type="file" name="nazwa" value="wstaw zdjęcie z pliku" accept="image/png, image/jpeg" multiple>

<form class="md-form">
  <div class="file-field">
    <div class="btn btn-primary btn-sm float-left">
      <span>Choose file</span>
      <input type="file">
    </div>
    <div class="file-path-wrapper">
      <input class="file-path validate" type="text" placeholder="Upload your file">
    </div>
  </div>
</form>

<h2 class="powiadomienia">Powiadomienia</h2>
@foreach ($page1 as $i1)
<div class="productWrapper">
    <img src="{{$i1->image}}" alt="" class="im" >
    <p class="name">{{$i1->name}}</p>
    <p class="amount">{{$i1->amount}}</p>
    <p class="price">{{$i1->price}}</p>
</div>
@endforeach
</div>
</div>



<div class="container">
@yield('footer')
</div>


</body>
</html>


