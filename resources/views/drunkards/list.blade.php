
@extends('layout')
@section('content')
<div class="row">
  <div class="col-md-10 col-md-offset-2">
      <h2>酔っぱらい一覧</h2>
      <table class="table table-striped">
          <tr>
              <th>酔っぱらい番号</th>
              <th>名前</th>
              <th>レベル</th>
              <th>体力</th>
              <th>攻撃力</th>
              <th>移動速度</th>
              <th></th>
              <th></th>
          </tr>
          @foreach($drunkards as $drunkard)
          <tr>
              <td>{{ $drunkard->id }}</td>
              <td><a href="/drunkard/{{ $drunkard->id }}">{{ $drunkard->name }}</a></td>
              <td>{{ $drunkard->level }}</td>
              <td>{{ $drunkard->hp }}</td>
              <td>{{ $drunkard->attack }}</td>
              <td>{{ $drunkard->move_speed }}</td>
              <td><button type="button" class="btn btn-primary" onclick="location.href='drunkard/edit/{{$drunkard->id}}'">編集</td>
              <form method="POST" action="{{ route('delete' , $drunkard->id) }}" onSubmit="return checkDelete()">
              @csrf
              <td><button type="submit" class="btn btn-primary" onclick=>削除</td>
              </form>
          </tr>
          @endforeach
      </table>
  </div>
</div>

<script>
function checkDelete(){
if(window.confirm('送信してよろしいですか？')){
    return true;
} else {
    return false;
}
}
</script>

@endsection