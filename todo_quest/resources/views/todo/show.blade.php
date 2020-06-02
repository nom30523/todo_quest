@extends('layouts.app')

@section('content')
<div class="container">
  <div class="user_card card">
    <div class="row">
      <div class="col-sm-4 img-box">
        @if ($level == 1)
          <img src="{{ asset('/images/level1.png') }}" alt="level1">
        @elseif ($level == 2)
          <img src="{{ asset('/images/level2.png') }}" alt="level2">
        @elseif ($level == 3)
          <img src="{{ asset('/images/level3.png') }}" alt="level3">
        @elseif ($level == 4)
          <img src="{{ asset('/images/level4.png') }}" alt="level4">
        @elseif ($level == 5)
          <img src="{{ asset('/images/level5.png') }}" alt="level5">
        @elseif ($level == 6)
          <img src="{{ asset('/images/level6.png') }}" alt="level6">
        @else
          <img src="{{ asset('/images/level7.png') }}" alt="level7">
        @endif
      </div>
      <div class="col-sm-8 card-items">
        <div class="card-body">
          <h3 class="card-title">Name: {{ $user->name }}</h3>
          <h5 class="card-text">レベル: {{ $level }}</h5>
          @if ($level < 7)
            <h5 class="card-text">次のレベルまで: {{ $thresold->thresold - $user->level->exp }} Exp</h5>
          @else
            <h5 class="card-text">次のレベルまで: レベルMAXです！</h5>
          @endif
        </div>
      </div>
    </div>
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
    <div class="row todo-form-wrap">
      <label for="todo-content" class="label-text">やることを追加する</label>
      <div class="form-group col-sm-10">
        <input type="text" name="body" value="{{ old('body') }}" class="form-control" id="todo-content">
      </div>
      <div class="col-sm-2">
        <input type="submit" value="追加" class="btn btn-primary">
      </div>
    </div>
  </form>
  <div class="card todo-list-card">
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
              <a href="{{ action('TodosController@edit', $todo) }}" class="list-menu">編集</a>
              <a href="#" data-id="{{ $todo->id }}" class="del list-menu font-red">削除</a>
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