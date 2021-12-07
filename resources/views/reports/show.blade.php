@extends('layouts.app')

@section('content')

{{-- グラフエリア --}}
<div class="col-md-11 col-md-0 mx-auto mt-5">

    <h5 class="mb-1">レポート集計グラフ</h5>

        <div id="target"></div>
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
            // パッケージのロード
            google.charts.load('current', {packages: ['corechart']});
            // ロード完了まで待機
            google.charts.setOnLoadCallback(drawChart);

            // コールバック関数の実装
            function drawChart() {
                // データの準備
                var data = google.visualization.arrayToDataTable([
                    ['日付', '気分の波'],
                    
                    @php
                    foreach($report_data as $d) {
                        echo "['".$d->created_at->format('m/d')."', ".$d->feeling."],";
                    }
                    @endphp

                ]);
                // オプション設定
                var options = {
                    title: 'レポートされた気分の波の推移',
                    seriesType: "line",
                    curveType: 'function',
                    isStacked: false,
                };

                // インスタンス化と描画
                var chart = new google.visualization.ComboChart(document.getElementById('target'));
                chart.draw(data, {
                    width: "100%",
                    height: 300,
                    legend: { position: 'top', maxLines: 2 },
                    fontSize: 10,
                    pointSize: 3,
                    // tooltip:{ textStyle: { fontSize: 8 } },
                    },
                    options);
            }
    </script>
</div>
{{-- グラフエリアおわり --}}

<div class="scroll">
    @foreach ($report_data as $note)
    <div class="col-md-11 col-md-1 mx-auto">
        <div class="card-wrap">
            <div class="card mt-3">
                <div class="card-header align-items-center d-flex">
                    <strong>{{ $note->created_at }}</strong>
                </div>
                <div class="card-body">
                    <div class="mb-1 text">
                        {{ $note->note }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection