@extends('app')
@section('content')
  <div class="container">
    <h1>Categories</h1>
    <table class="table table-striped">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Action</th>
      </tr>
    @foreach($categoryModel as $category)
      <tr>
        <td>{{$category->id}}</td>
        <td>{{$category->name}}</td>
        <td>{{$category->description}}</td>
        <td></td>
      </tr>
    @endforeach
    </table>
  </div>
@endsection
