@extends('layouts.app')

@section('content')

<div class="panel-body">
    <div class="d-flex flex-column align-items-center mt-5">
        <div class="col-xl-7 col-lg-8 col-md-10 col-sm-11 post-card">
            @include('commons.error_messages')
            <div class="card">
                <div class="card-header">
                    今の状態について記入
                </div>
                <div class="card-body">
                    <form class="upload" id="new_post" enctype="multipart/form-data" action="{{ route('reports.store') }}" accept-charset="UTF-8" method="post">
                        @csrf
                        @method('POST')
                        <div class="md-form">
                            <p class="question">１．現在の気分に当てはまる数字を選択してください。</p>
                            <p class="q-discription">※ +躁 〜 -鬱 (1=注意深く観察, 2=行動をとる, 3=医師に連絡, 5=病院に行く)</p>
                            <input type="radio" name="feeling" value="5"/> +5 
                            <input type="radio" name="feeling" value="4"/> +4 
                            <input type="radio" name="feeling" value="3"/> +3 
                            <input type="radio" name="feeling" value="2"/> +2 
                            <input type="radio" name="feeling" value="1"/> +1 
                            <input type="radio" name="feeling" value="0"/> 0 
                            <input type="radio" name="feeling" value="-1"/> -1 
                            <input type="radio" name="feeling" value="-2"/> -2 
                            <input type="radio" name="feeling" value="-3"/> -3 
                            <input type="radio" name="feeling" value="-4"/> -4 
                            <input type="radio" name="feeling" value="-5"/> -5 
                        </div>
                        <br>
                        <div class="form-group">
                            <p class="question">２．起きた出来事、対処法、処方薬以外に服薬したサプリなどについて記入してください。</p>
                            <textarea name="note" class="form-control" rows="10" placeholder="例：良かったこと→久々に友人と会った。嫌なこと→仕事で2度目のミスをした。サプリ：ホスファリチルゼリン200mg, ビタミンB12 25bcg"></textarea>
                        </div>
                        <div class="text-center">
                            <input type="submit" name="commit" value="記入する" class="btn btn-primary w-25" data-disable-with="記入する"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection