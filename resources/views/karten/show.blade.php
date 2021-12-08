@extends('layouts.app')

@section('content')

<div class="col-md-11 col-md-1 mx-auto mt-5">
    <div class="card-wrap">
        <div class="card mt-3">
            <div class="card-header align-items-center d-flex">
                現在服薬中のおくすり
                <a class="btn btn--orange btn--radius mdcn-add" href="{{ route('karten.create', Auth::id() ) }}">薬の追加</a>
                <a class="btn btn--orange btn--radius mdcn-disc-edit" href="{{ route('discription.create', Auth::id() ) }}">説明追加</a>
                <a class="btn btn--orange btn--radius mdcn-disc-edit" href="{{ route('discription.edit', Auth::id() ) }}">説明編集</a>
            </div>
            <div class="card-body">
                <div class="mb-1 text">
                    <ul>
                        @foreach($karten as $karte)
                        <li class="list-style-karte">
                            <form class="edit_button" method="post" action="{{ route('karten.destroy', $karte->id )}}" accept-charset="UTF-8">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn--orange btn--radius mdcn-add" rel="nofollow" >削除</button>
                            </form>
                            {{-- <a class="btn btn--orange btn--radius mdcn-add"　href="{{ route('karten.destroy', $karte->id ) }}" method='delete'>削除</a> --}}
                            <form class="edit_button" method="get" action="{{ route('karten.edit', $karte->id ) }}">
                                @csrf
                                <button class="btn btn--orange btn--radius mdcn-add">編集</button>
                            </form>
                            {{-- <a class="btn btn--orange btn--radius mdcn-add"　href="{{ route('karten.edit', Auth::id() ) }}">編集</a>　 --}}
                            {{ $karte->medicine }} 　　:　
                            @foreach($discription as $d)
                                @if ($karte->id == $d->karte_id)
                                    {{ $d->discription }}
                                @endif
                            @endforeach 
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection