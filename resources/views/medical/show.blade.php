@extends('layouts.app')

@section('content')

<h2>あなたの医療情報</h2>
/
/
/
/
/
/
<a href="{{ route('medical.edit', Auth::id() ) }}">編集する</a>

@endsection