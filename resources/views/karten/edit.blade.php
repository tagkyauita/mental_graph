@extends('layouts.app')

@section('content')

<div class="panel-body">
    <div class="d-flex flex-column align-items-center mt-3">
        <div class="col-xl-7 col-lg-8 col-md-10 col-sm-11 post-card">
            @include('commons.error_messages')
            <div class="card mt-5">
                <div class="card-header">
                    薬の名称を編集
                </div>
                <div class="card-body">
                    <form class="upload" id="new_post" enctype="multipart/form-data" action="{{ route('karten.update', $karte->id ) }}" accept-charset="UTF-8" method="POST">
                    @method('PUT')    
                    @csrf
                        <div class="form-group">
                            <input class="form-control" placeholder="薬の名称を変更" type="text" name="medicine" value=""/>
                        </div>
                        <div class="text-center">
                            <input type="submit" name="commit" value="更新する" class="btn btn--orange btn--radius" data-disable-with="更新する"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection