@extends('layouts.user')

@section('content')
<h2 class="h2">ユーザトップページ</h2>
<div class="row">
  <div class="col-8">
    @include('components.information.latest_list')
  </div>

  <div class="col-4">
    <div class="card">
      <div class="card-header">
        購入履歴
      </div>
      <div class="card-body">
      @foreach ($user_items as $user_item)
      <div class="detail">
        <a href="{{ route('item.show', ['id' => $user_item['id']]) }}">{{ $user_item['name'] }}</a>
      </div>
      @endforeach
      </div>
    </div>
  </div>
</div>
@endsection