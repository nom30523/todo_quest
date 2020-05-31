@extends('layouts.app')

@section('content')
<div class="container">
  <h3>やることを編集する</h3>
  <form action="{{ action('TodosController@update', $todo) }}" method="post">
    @csrf
    <input type="text" name="body" value="{{ $todo->body }}">
    <input type="submit" value="変更">
  </form>
</div>
@endsection