@extends('layouts.user')

@section('content')

<h2>商品</h2>
@if ($cart_items)
<div id="item-list" class="row">

  @foreach ($cart_items as $index => $cart_item)
  <div class="col-md-4">
    <div class="card">
      <div class="card-header">
        <img src="{{ asset('images/item_'.$cart_item['id'].'.jpg') }}" alt="">
      </div>

      <div class="card-body">
        <div class="detail">
          <h4 class="h4">商品名</h4>
          <a href="{{ route('item.show', ['id' => $cart_item['id']]) }}">{{ $cart_item['name'] }}</a>
          <h4 class="h4">価格</h4>
          {{ $cart_item['price'] }}
        </div>
      </div>
      <div class="cart-footer text-center">
        <p>
          <a href="{{ route('cart.remove', ['id' => $index]) }}" class="btn btn-danger">カートから削除</a>
        </p>
      </div>
    </div>
  </div>
  @endforeach

</div>
@endif

@endsection