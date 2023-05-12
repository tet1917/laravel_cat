@extends('layouts.default')
@section('title','フォームの練習')
@section('content')
<form action="/query-strings" method="get">
  <label>ラベル：<input type="text" name="keyword"></label>
  <button type="submit">送信する</button>
</form>

@endsection