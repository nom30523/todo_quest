<form action="{{ action('UsersController@search') }}" method="get">
  @csrf
  <label for="user-search-form">ユーザー検索</label>
  <div class="serch-form-wrap">
    <input type="text" name="input" class="form-control" id="user-search-form" value="{{ $input }}">
    <input type="submit" class="btn btn-primary" value="検索">
  </div>
</form>
@foreach ($items as $item)
  <div class="user_card card">
    <div class="row">
      <div class="col-sm-4 img-box">
        @if ($item->level->level == 1)
          <img src="{{ asset('/images/level1.png') }}" alt="level1">
        @elseif ($item->level->level == 2)
          <img src="{{ asset('/images/level2.png') }}" alt="level2">
        @elseif ($item->level->level == 3)
          <img src="{{ asset('/images/level3.png') }}" alt="level3">
        @elseif ($item->level->level == 4)
          <img src="{{ asset('/images/level4.png') }}" alt="level4">
        @elseif ($item->level->level == 5)
          <img src="{{ asset('/images/level5.png') }}" alt="level5">
        @elseif ($item->level->level == 6)
          <img src="{{ asset('/images/level6.png') }}" alt="level6">
        @else
          <img src="{{ asset('/images/level7.png') }}" alt="level7">
        @endif
      </div>
      <div class="col-sm-8 card-items">
        <div class="card-body">
          <h3 class="card-title">Name: {{ $item->name }}</h3>
          <h5 class="card-text">レベル: {{ $item->level->level }}</h5>
        </div>
      </div>
    </div>
  </div>
@endforeach
