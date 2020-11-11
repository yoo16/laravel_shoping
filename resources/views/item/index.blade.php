@extends('layouts.user')

@section('content')

<h2>商品</h2>
@if ($items)
<div id="item-list" class="row">

  @foreach ($items as $item)
  <div class="col-md-4">
    <div class="card">
      <div class="card-header">
        <img src="{{ asset('images/item_'.$item['id'].'.jpg') }}" alt="">
      </div>

      <div class="card-body">
        <div class="detail">
          <h4 class="h4">商品名</h4>
          <a href="{{ route('item.show', ['id' => $item['id']]) }}">{{ $item['name'] }}</a>
          <h4 class="h4">価格</h4>
          {{ $item['price'] }}
          <p>
          </p>
        </div>
      </div>
    </div>
  </div>
  @endforeach

</div>
@endif

@endsection