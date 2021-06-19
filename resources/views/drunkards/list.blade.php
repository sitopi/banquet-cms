<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ブログ</title>
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js" defer></script>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">ブログ</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">ブログ一覧 <span class="sr-only"></span></a>
      <a class="nav-item nav-link" href="#">ブログ投稿</a>
    </div>
  </div>
</nav>
    </header>
    <br>
    <div class="container">
    <div class="row">
  <div class="col-md-8 col-md-offset-2">
      <h2>ブログ記事一覧</h2>
      <table class="table table-striped">
          <tr>
              <th>酔っぱらい番号</th>
              <th>名前</th>
              <th>レベル</th>
              <th>体力</th>
              <th>攻撃力</th>
              <th>移動速度</th>
          </tr>
          @foreach($drunkards as $drunkard)
          <tr>
              <td>{{ $drunkard->drunkard_id }}</td>
              <td>{{ $drunkard->name }}</td>
              <td>{{ $drunkard->level }}</td>
              <td>{{ $drunkard->hp }}</td>
              <td>{{ $drunkard->attack }}</td>
              <td>{{ $drunkard->move_speed }}</td>
          </tr>
          @endforeach
      </table>
  </div>
</div>
    </div>
    <footer class="footer bg-dark  fixed-bottom">
    <div class="container text-center">
    <span class="text-light">©︎福のプログラミング講座</span>
</div>
    </footer>
</body>
</html>