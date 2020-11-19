@extends('layouts.user')

@section('content')

<h2 class="h2">注文内容を確認</h2>
<div class="card">
  <div class="card-header">
    <h3 class="h3">
      お届け先
      <a href="" class="btn btn-sm btn-outline-primary">変更</a>
    </h3>
  </div>
  <div class="card-body">
    <p>
      東京　太郎
    </p>
    <p>
      〒160-0005
      <br>
      東京都 新宿区新宿 x-x-x
      <br>
      xxxマンション 301
    </p>
    <p>
    </p>
  </div>
</div>

<div class="card">
  <div class="card-header">
    <h3 class="h3">
      クレジットカード
      <a href="" class="btn btn-sm btn-outline-primary">変更</a>
    </h3>
  </div>
  <div class="card-body">
    <p>
      VISA
      <br>
      xxxx-xxxx-xxxx-1234
    </p>
  </div>
</div>

<div class="card">
  <div class="card-header">
    <h3 class="h3">希望配達日時</h3>
  </div>
  <div class="card-body">
    <p>
      <input type="date" name="delivery_at" value="">
    </p>
    <p>
      <input id="delivery_hour_type_1" name="delivery_hour" type="radio">
      <label for="delivery_hour_type_1">10:00-12:00</label>
      <input id="delivery_hour_type_2" name="delivery_hour" type="radio">
      <label for="delivery_hour_type_2">12:00-17:00</label>
      <input id="delivery_hour_type_3" name="delivery_hour" type="radio">
      <label for="delivery_hour_type_3">17:00-20:00</label>
    </p>
  </div>
</div>

<div class="card">
  <div class="card-header">
    <h3 class="h3">小計</h3>
  </div>
  <div class="card-body">
    @foreach ($cart_items as $index => $cart_item)
    <p>{{ $cart_item['name'] }}</p>
    @endforeach

    <p class="text-danger">
      ¥ {{ number_format($total_price) }}（税込）
    </p>
  </div>
  <div class="card-footer">
    <form action="{{ route('cart.purchase') }}" method="post">
      @csrf
      <button class="btn btn-lg btn-block btn-success">注文を確定する</button>
    </form>
  </div>
</div>

@endsection