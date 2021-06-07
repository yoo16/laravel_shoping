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