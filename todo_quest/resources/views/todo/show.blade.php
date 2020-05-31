@extends('layouts.app')

@section('content')
<div class="container">
  <div class="user_card">
    <p>{{ $user->id }}{{ $user->name }}</p>
  </div>
  <h3>やることを追加する</h3>
  @if (count($errors) > 0)
  <div>
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
  @endif
  <form action="{{ action('TodosController@store', $user) }}" method="post">
    @csrf
    <input type="text" name="body" value="{{ old('body') }}">
    <input type="submit" value="追加">
  </form>
  <div class="todo-lists">
    <ul>
      @foreach ($user->todos as $todo)
        <li class="todo-list">
          {{ $todo->body }}
          <a href="{{ action('TodosController@edit', $todo) }}">編集</a>
          <form action="{{ action('TodosController@destroy', $todo) }}" method="post" style="display: inline;">
            @csrf
            <input type="submit" value="削除">
          </form>
        </li>
      @endforeach
    </ul>
  </div>
</div>
@endsection