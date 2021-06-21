@extends('layout')
@section('title', 'ブログ投稿')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h2>酔っぱらい編集フォーム</h2>
        <form method="POST" action="{{ route('update') }}" onSubmit="return checkSubmit()">
        @csrf
        <input type="hidden" name="id" value="{{$drunkard->id}}">
            <div class="form-group">
                <label for="name">
                    名前
                </label>
                <input
                    id="name"
                    name="name"
                    class="form-control"
                    value="{{ $drunkard->name }}"
                    type="text"
                >
                @if ($errors->has('name'))
                    <div class="text-danger">
                        {{ $errors->first('name') }}
                    </div>
                @endif
            </div>

            <div class="form-group">
                <label for="level">
                    レベル
                </label>
                <input
                    id="level"
                    name="level"
                    class="form-control"
                    value="{{ $drunkard->level }}"
                    type="text"
                >
                @if ($errors->has('level'))
                    <div class="text-danger">
                        {{ $errors->first('level') }}
                    </div>
                @endif
            </div>

            <div class="form-group">
                <label for="hp">
                    体力
                </label>
                <input
                    id="hp"
                    name="hp"
                    class="form-control"
                    value="{{ $drunkard->hp }}"
                    type="text"
                >
                @if ($errors->has('hp'))
                    <div class="text-danger">
                        {{ $errors->first('hp') }}
                    </div>
                @endif
            </div>

            <div class="form-group">
                <label for="attack">
                    攻撃力
                </label>
                <input
                    id="attack"
                    name="attack"
                    class="form-control"
                    value="{{ $drunkard->attack }}"
                    type="text"
                >
                @if ($errors->has('attack'))
                    <div class="text-danger">
                        {{ $errors->first('attack') }}
                    </div>
                @endif
            </div>

            <div class="form-group">
                <label for="move_speed">
                    移動速度
                </label>
                <input
                    id="move_speed"
                    name="move_speed"
                    class="form-control"
                    value="{{ $drunkard->move_speed }}"
                    type="text"
                >
                @if ($errors->has('move_speed'))
                    <div class="text-danger">
                        {{ $errors->first('move_speed') }}
                    </div>
                @endif
            </div>

            <div class="form-group">
                <label for="description">
                    説明
                </label>
                <textarea
                    id="description"
                    name="description"
                    class="form-control"
                    rows="4"
                >{{ $drunkard->description }}</textarea>
                @if ($errors->has('description'))
                    <div class="text-danger">
                        {{ $errors->first('description') }}
                    </div>
                @endif
            </div>
            <div class="mt-5">
                <a class="btn btn-secondary" href="{{ route('drunkards') }}">
                    キャンセル
                </a>
                <button type="submit" class="btn btn-primary">
                    投稿する
                </button>
            </div>
        </form>
    </div>
</div>
<script>
function checkSubmit(){
if(window.confirm('送信してよろしいですか？')){
    return true;
} else {
    return false;
}
}
</script>
@endsection