@extends('layouts.app')
@section('content')
<h1>Gestion d'entreprise</h1>
<table class="table table-bordered">
<tr>
<th>Nom de l'entreprise:</th>
<td>{{ $entreprise->nomE }}</td>
</tr>
<tr>
<th>description:</th>
<td>{{ $entreprise->description }}</td>
</tr>

</table>
@endsection