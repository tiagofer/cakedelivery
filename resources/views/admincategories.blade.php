@extends('app')

@section('content')

<body class="container">
  <table class="table" border="1" style="width:100%">
    <tr>
      <td>id</td>
      <td>Categorias</td>
      <td>Descrição</td>
    </tr>
    @foreach($categories as $category)
      <tr>
        <td>{{$category->id}}</td>
        <td>{{$category->name}}</td>
        <td>{{$category->description}}</td>
      </tr>
    @endforeach
  </table>
</body>

@endsection
