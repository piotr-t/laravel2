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
<div class="title row">
<h1 class="administratorPanel col-sm-12">Administrator Panel</h1>
</div>
<div class="row r1" >
<div class="aside col-sm-3">
  <p>search:</p>  <input type="text">
<ul class="assetList" type="none">
@for ($i = 0; $i < 30; $i++)
<li class="sort"><input type="checkbox" name="check" id="c">  {{$i}}</li>
@endfor
</ul>
</div>
<div class="content col-sm-9">Content</div>
</div>
<div class="row r2">
    <div class="col-sm-12">
        <p>footer</p>
    </div>
</div>
</body>
</html>
