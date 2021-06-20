
@extends('layout')
@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2">
      <h2>{{ $drunkard->name }}</h2>
      {{ $drunkard->description }}
  </div>
</div>
@endsection