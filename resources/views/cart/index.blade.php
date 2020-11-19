@extends('layouts.user')

@section('content')

<h2 class="h2">ショッピングカート</h2>

@if ($cart_items)
<div class="row">
  <div id="item-list" class="col-8 row">

    @foreach ($cart_items as $index => $cart_item)
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <img src="{{ asset('images/item_'.$cart_item['id'].'.jpg') }}" alt="">
        </div>

        <div class="card-body">
          <div class="detail">
            <p>
              <a href="{{ route('item.show', ['id' => $cart_item['id']]) }}">{{ $cart_item['name'] }}</a>
            </p>
            <p>
              ¥{{ number_format($cart_item['price']) }}
            </p>
          </div>
        </div>
        <div class="cart-footer text-center p-2">
          <a href="{{ route('cart.remove', ['id' => $index]) }}" class="btn btn-danger">カートから削除</a>
        </div>
      </div>
    </div>
    @endforeach

  </div>

  <div class="col-4">
    <div class="card">
      <div class="card-header">
        <h3 class="h3">小計</h3>
      </div>
      <div class="card-body">
        <p>
          ¥ {{ number_format($total_price) }}（税込）
        </p>
      </div>
      <div class="card-footer">
        <a href="{{ route('cart.confirm') }}" class="btn btn-block btn-success">レジに進む</a>
      </div>
    </div>
  </div>

</div>
@else
<div class="alert alert-info">
  カートが空です。
</div>
@endif

@endsection