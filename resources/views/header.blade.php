<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="{{ route('drunkards') }}">BanQuet管理画面</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="{{ route('drunkards') }}">酔っぱらい一覧 <span class="sr-only"></span></a>
      <a class="nav-item nav-link active" href="{{ route('create') }}">酔っぱらい登録</a>
    </div>
  </div>
</nav>