@extends('layouts.user')

@section('content')

<div class="row mt-4 mb-4">
  <div class="col-12">
    <form action="">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="商品名">
        <span class="input-group-btn">
          <button class="btn btn-default" type="submit">検索</button>
        </span>
      </div>
    </form>
  </div>
</div>

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
          ¥{{ number_format($item['price']) }}
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