@extends('layouts.app')

@section('content')

@include('commons.error_messages')
<div class="container mt-5">
    <div class="card">
        <div class="form-wrap col-xs-6 col-lg-5 mx-auto mt-4 mb-5">
            <div class="form-group text-center">
                <h2 class="logo-img mx-auto mb-2 mt-2">ログイン</h2>
            </div>

            <form class="login" action="{{ route('login.post') }}" accept-charset="UTF-8" method="post">
                @csrf
                <div class="form-group">
                    <input class="form-control" type="email" placeholder="メールアドレス" name="email" value="">
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" placeholder="パスワード" name="password" value="">
                </div>
                <div class="actions text-center">
                    <input class="btn btn-danger w-auto" type="submit" value="ログイン">
                </div>
            </form>

            <p class="devise-link text-center mb-2">アカウントをお持ちでない方は<a href="{{ route('signup') }}">こちら</a></p>
        </div>
    </div>
</div>

@endsection