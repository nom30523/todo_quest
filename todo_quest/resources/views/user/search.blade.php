@extends('layouts.app')

@section('content')
<div class="container">
  @include('user.userLists', ['items' => $items, 'input' => $input])
  {{ $items->appends(request()->input())->links() }}
</div>
@endsection