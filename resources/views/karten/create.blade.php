@extends('layouts.app')

@section('content')

<div class="panel-body">
    <div class="d-flex flex-column align-items-center mt-5">
        <div class="col-xl-7 col-lg-8 col-md-10 col-sm-11 post-card">
            @include('commons.error_messages')
            <div class="card">
                <div class="card-header">
                    処方薬の登録
                </div>
                <div class="card-body">
                    <form class="upload" id="new_post" enctype="multipart/form-data" action="{{ route('karten.store', Auth::id() )}}" accept-charset="UTF-8" method="post">
                        @csrf
                        @method('POST')
                        <div class="md-form">
                            <p class="question mb-2">お薬の名称</p>
                            <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                            <input class="form-control" placeholder="くすりの名称 錠数" type="text" name="medicine" value=""/>
                        </div>
                        <div class="text-center">
                            <input type="submit" name="commit" value="登録する" class="btn btn--orange btn--radius" data-disable-with="登録する"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection