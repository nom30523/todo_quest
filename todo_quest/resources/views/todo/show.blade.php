@extends('layouts.app')

@section('content')
<div class="container">
  <div class="user_card">
    <p>{{ $user->id }}{{ $user->name }}</p>
  </div>
  @if (count($errors) > 0)
    <div class="alert alert-danger">
      @foreach ($errors->all() as $error)
        {{ $error }}
      @endforeach
    </div>
  @endif
  <form action="{{ action('TodosController@store', $user) }}" method="post">
    @csrf
    <div class="row">
      <label for="todo-content" style="padding-left: 15px;">やることを追加する</label>
      <div class="form-group col-sm-10">
        <input type="text" name="body" value="{{ old('body') }}" class="form-control" id="todo-content">
      </div>
      <div class="col-sm-2">
        <input type="submit" value="追加" class="btn btn-primary">
      </div>
    </div>
  </form>
  <div class="card">
    <ul class="list-group list-group-flush">
      @foreach ($user->todos as $todo)
        <li class="list-group-item" style="list-style: none;">
          <div class="row">
            <div class="col-sm-10">
              <form action="{{ action('TodosController@status', $todo) }}" method="post" id="form_{{ $todo->id }}">
                @csrf
              </form>
              @if ($todo->status == 0)
                <a href="#" class="status" data-id="{{ $todo->id }}">
                  <i class="far fa-square"></i>
                </a>
              @else
                <a href="#" class="status" data-id="{{ $todo->id }}">
                  <i class="far fa-check-square"></i>
                </a>
              @endif
              <span style="padding-left: 5px;">{{ $todo->body }}</span>
            </div>
            <div class="col-sm-2">
              <a href="{{ action('TodosController@edit', $todo) }}">編集</a>
              <a href="#" data-id="{{ $todo->id }}" class="del" style="color: tomato;">削除</a>
              <form action="{{ action('TodosController@destroy', $todo) }}" method="post" id="del_{{ $todo->id }}">
                @csrf
              </form>
            </div>
          </div>
        </li>
      @endforeach
    </ul>
  </div>
</div>
<script src="/js/status.js"></script>
<script src="/js/del.js"></script>
@endsection