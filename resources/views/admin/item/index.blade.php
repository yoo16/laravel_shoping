@extends('layouts.admin')

@section('content')

@if ($items)
<div id="item-list" class="row">

  <table class="table">
    <tr>
      <th>ID</th>
      <th>商品名</th>
      <th>価格</th>
    </tr>
    @foreach ($items as $item)
    <tr>
      <td>{{ $item['id'] }}</td>
      <td><a href="{{ route('admin.item.show', ['id' => $item['id']]) }}">{{ $item['name'] }}</a></td>
      <td>¥{{ number_format($item['price']) }}</td>
    </tr>
    @endforeach
  </table>

</div>
@endif

@endsection