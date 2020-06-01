@extends('layouts.app')

@section('content')
<div class="container">
  <form action="{{ action('TodosController@update', $todo) }}" method="post">
    @csrf
    <div class="row">
      <label for="todo-content" style="padding-left: 15px;">やることを編集する</label>
      <div class="form-group col-sm-10">
        <input type="text" name="body" id="todo-content" class="form-control" value="{{ $todo->body }}">
      </div>
      <div class="col-sm-2">
        <input type="submit" value="変更" class="btn btn-primary">
      </div>
    </div>
  </form>
</div>
@endsection