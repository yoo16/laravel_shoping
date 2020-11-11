@extends('layouts.user')

@section('content')
<h2 class="h2">ユーザトップページ</h2>
<div class="row">
  <div class="col-8">
    <div class="card">
      <div class="card-header">お知らせ</div>
      <div class="card-body">
      </div>
    </div>
  </div>

  <div class="col-4">
    <div class="card">
      <div class="card-header">
        <h2>購入履歴</h2>
      </div>
      <div class="card-body">
        <a href="{{ route('item.show', ['id' => 1]) }}">{{ $item->value['name'] }}</a>
      </div>
    </div>
  </div>
</div>
@endsection