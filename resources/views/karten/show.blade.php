@extends('layouts.app')

@section('content')

<div class="col-md-11 col-md-1 mx-auto mt-5">
        <div class="card-wrap">
            <div class="card mt-3">
                <div class="card-header align-items-center d-flex">
                    現在服薬中のおくすり
                </div>
                <div class="card-body">
                    <div class="mb-1 text">
                        <ul>
                            @foreach($karten as $karte)
                            <li class="list-style-karte">
                                {{ $karte->medicine }} ：　{{ $karte->discription }}
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection