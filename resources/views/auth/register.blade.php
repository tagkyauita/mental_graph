@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="card">
        <div class="form-wrap col-xs-6 col-lg-5 m-auto">
            <div class="form-group text-center">
                <h2 class="logo-img mx-auto mt-5">新規登録</h2>
            </div>

            <form class="signup" action="{{ route('signup.post') }}" accept-charset="UTF-8" method="post">
                @csrf
                <div class="form-group col-mb-5">
                    <div class="form-group col-mb-5">
                        <input class="form-control" name="email" type="email" placeholder="メールアドレス" value="">
                    </div>
                    <div class="form-group col-mb-5">
                        <input class="form-control" name="name" type="text" placeholder="名前" value="">
                    </div>
                    <div class="form-group col-mb-5">
                        <input class="form-control" name="password" type="password" placeholder="パスワード" value="">
                    </div>
                    <div class="form-group col-mb-5">
                        <input class="form-control" name="password_confirmation" type="password" placeholder="パスワード再確認" value="">
                    </div>
                </div>
                <div class="actions text-center">
                    <input class="btn btn-info w-auto" type="submit" value="新規登録">
                </div>
            </form>
            <br>
            <p class="divise-link text-center mb-5">アカウントをすでにお持ちの方→<a href="{{ route('login') }}">ログインする</a></p>
        </div>
    </div>
</div>

@endsection