@extends('layouts.app')

@section('content')

<h2>レコード表示画面</h2>

ここにjavascriptのグラフが載る

<a href="{{ route('reports.edit', Auth::id() ) }}">今日の調子を入力]</a>

@endsection