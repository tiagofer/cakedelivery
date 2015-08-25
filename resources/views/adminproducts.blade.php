@extends('app')

@section('content')
  <table class="table table-striped">
    <th>Name</th>
    <th>Description</th>
    <th>Price</th>
  @foreach($listProducts as $product)
    <tr>
      <td>{{$product->name}}</td>
      <td>{{$product->description}}</td>
      <td>{{$product->price}}</td>
    </tr>
  @endforeach
</table>
@endsection
