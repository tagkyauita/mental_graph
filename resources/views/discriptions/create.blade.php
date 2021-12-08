@extends('layouts.app')

@section('content')

<div class="panel-body">
    <div class="d-flex flex-column align-items-center mt-3">
        <div class="col-xl-7 col-lg-8 col-md-10 col-sm-11 post-card">
            @include('commons.error_messages')
            <div class="card mt-5">
                <div class="card-header">
                    薬についての説明を追加
                </div>
                <div class="card-body">
                    <form class="upload" id="new_post" enctype="multipart/form-data" action="{{ route('discription.store', Auth::id() ) }}" accept-charset="UTF-8" method="POST">
                    @method('POST')    
                    @csrf

                        <div class="form-group">
                            <select name="medicine_id" type="text" class="form-control">
                                @foreach($karten as $karte)
                                    <option value="{{ $karte->id }}">{{ $karte->medicine }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="薬についての説明" type="text" name="discription" value=""/>
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