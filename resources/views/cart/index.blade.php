@extends('layouts.user')

@section('content')

<h2 class="h2">ショッピングカート</h2>
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
          <p>
            <a href="{{ route('item.show', ['id' => $cart_item['id']]) }}">{{ $cart_item['name'] }}</a>
            ¥{{ number_format($cart_item['price']) }}
          </p>
          <div class="form-inline">
            <label for="">数量</label>
            &nbsp;
            <select name="amount" class="form-control col-2">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="3">4</option>
              <option value="3">5</option>
            </select>
          </div>
        </div>
      </div>
      <div class="cart-footer text-center p-2">
        <a href="{{ route('cart.remove', ['id' => $index]) }}" class="btn btn-danger">カートから削除</a>
      </div>
    </div>
  </div>
  @endforeach

</div>
@else
<div class="alert alert-info">
  カートが空です。
</div>
@endif

@endsection