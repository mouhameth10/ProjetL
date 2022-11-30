<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../../../public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="public/css/diapositive.css">
    <link rel="stylesheet" type="text/css" href="public/css/diap.css">
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="public/js/bootstrap.min.js">
  </head>
  
  <body id="im" >

@extends('layouts.app')
@section('content')
<div class="row">
<div class="col-lg-11">
<h2>Entreprise</h2>
</div>
<div class="col-lg-1">
<a class="btn btn-success" href="{{ url('entreprise/create') }}">Ajouter</</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
<tr>
<th>No</th>
<th>nom de l'entreprise</th>
<th>desccription</th>

<th>Actions</th>
</tr>
@foreach ($entreprise as $index => $entreprise)
entreprise/create.blade.php
<tr>
<td>{{ $index }}</td>
<td>{{ $entreprise->nomE }}</td>
<td>{{ $entreprise->description }}</td>

<td>
<form action="{{ url('entreprise/'. $entreprise->id) }}" method="POST">
@csrf
@method('DELETE')
<a class="btn btn-info" href="{{ url('entreprise/'. $entreprise-><a class="btn btn-primary" href="{{ url('entreprise/'. $entreprise-><button type="submit" class="btn btn-danger">Supprimer</button>
</form>
</td>
</tr>
@endforeach
</table>
@endsection
@extends('layouts.app')
@section('content')
<h1>Ajouter une entreprise</h1>
@if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>


</div>
@endif
<form action="{{ url('entreprise') }}" method="POST">
@csrf
<div class="form-group mb-3">
<label for="nomE">Nom de l'entreprise:</label>
<input type="text" class="form-control" id="nomE" ></div>
<div class="form-group mb-3">
<label for="telephone">description:</label>
<input type="text" class="form-control" id="description" > </div>


<button type="submit" class="btn btn-primary">Enregister</button>
</form>
@endsection

</body>
   
   </html>