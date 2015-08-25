@extends('app')
@section('content')
  <h1>Create Category</h1>

    @if($errors->any())

        <ul class="alert">
            @foreach($errors->all() as $error)
              <li>{!! $error !!}</li>
            @endforeach
        </ul>

    @endif

    {!!Form::open(array('route' => 'storage', 'files' => true, 'method' => 'post'))!!}
      <div class="form-group">
        {!!Form::label('name', 'Name:')!!}
        {!!Form::text('name', null, ['class'=>'form-control'])!!}
      </div>

      <div class="form-group">
        {!!Form::label('description', 'Description:')!!}
        {!!Form::textarea('description', null, ['class'=>'form-control'])!!}
      </div>

      <div class="form-group">
        {!!Form::submit('Add Category', ['class'=>'btn btn-primary form-control'])!!}
      </div>
    {!!Form::close()!!}
@endsection
