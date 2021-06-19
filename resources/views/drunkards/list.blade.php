
@extends('layout')
@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2">
      <h2>酔っぱらい一覧</h2>
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
@endsection