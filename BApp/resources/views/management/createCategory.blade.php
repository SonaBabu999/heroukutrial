@extends('layouts.app')
@section('content')

<div class="container">
<div class="row">
<div class="col-2">

@include('sidebar')

</div>

<div class="col-10">
<div class="card">
<div class="card-header">
<h6><b>Create Category</b></h6>
<a href="/management/category/create" class="btn btn-primary float-right">Create Category</a>
</div>
<div class="card-body">
@if(session('status'))
<div class="alert alert-success alert-dismissible">
<button type="button"class='close' data-dismiss='alert'>&times;</button>
{{ session('status')}}
</div>
@endif


<table class="table">
<thead>
<tr>
<td><b>ID</b></td>
<td><b>Name</b></td>
<td><b>Edit</b></td>
<td><b>Delete</b></td>
</tr>
</thead>
<tbody>
@foreach($categories as $cat)

<tr>
<td>{{$cat->id}}</td>
<td>{{$cat->name}}</td>
<td><a href="/management/category/{{$cat->id}}/edit" class='btn btn-primary'>Edit</a></td>

<td><form action="/management/category/{{$cat->id}}" method='POST'>
@csrf
@method('DELETE')
<input type="submit" class='btn btn-danger' value='Delete'>
</form></td>
</tr>
@endforeach

</tbody>

</table>


</div>

<div class="card-footer">

</div>
</div>
</div>
</div>
</div>



@endsection