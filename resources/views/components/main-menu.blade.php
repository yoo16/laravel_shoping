<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">ショッピングモール</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('home') }}">ホーム</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('item') }}">商品</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('cart') }}">カート</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">会員情報</a>
      </li>
    </ul>
  </div>
</nav>