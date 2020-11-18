<div class="card">
  <div class="card-header">お知らせ</div>
  <div class="card-body">
    <ul>
      @foreach ($informations as $information)
      <li><a href=""><?= $information['title'] ?></a></li>
      @endforeach
    </ul>
  </div>
</div>