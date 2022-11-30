@extends('layouts.app')
@section('content')
<h1>Modifier entreprise</h1>
@if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
<form method="post" action="{{ url('entreprise/'. $entreprise->id) }}" >
@method('PATCH')
@csrf
<div class="form-group mb-3">
<label for="nomE">Nom de l'entreprise:</label>
<input type="text" class="form-control" id="nomE"> </div>

<div class="form-group mb-3">
<label for="description">description:</label>
<input type="text" class="form-control" id="description" ></div>

<button type="submit" class="btn btn-primary">Enregistrer</button>
</form>
@endsection