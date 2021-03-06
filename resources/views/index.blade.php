@extends('layouts.app')

@section('content')

<div class="jumbotron">
    <h2 class="display-4 text-center">MentalGraph</h2>
    <p class="text-center">精神疾患者のためのモニタリングシート</p>
</div>

<div class="col-md-8 col-md-2 mx-auto" style="background-color: #d7eadf">
    <div class="container-discription">
        <h2 class="discription_title mt-5">MentalGraphとは</h2>
        <p class="discription" >うつ病や双極性障害、あるいは気分障害や自律神経失調症など、さまざまな精神疾患に悩まされている方のためのモニタリングシートです。このアプリでは、決まった時間にそのときの”体調”や”できごと”を記録していくことでグラフが生成されていきます。このグラフと記録を長期的に観察することで、自分の体調変化の傾向を見つけたり、管理することを目的としています。</p>
    </div>
    <div class="container-discription">
        <h2 class="discription_title">使いかた</h2>
        <p class="discription">まずはカルテにご自身の処方されている薬を登録しましょう。この情報は、処方が変わったり増減したりした場合には更新してください。これは薬効と体調の関連をみることを目的としているからです。<br><br>そして、任意の時間にレポートを記入しましょう。”そのときの気分”、その日あった”良いできごと”、”悪いできごと”、”睡眠時間”、”その他健康のために行ったことなど”です。朝は調子がいいけれど、夜になると気分が塞ぎ込む、というような方は、朝昼夜とこまめに記録をつけてみると、体調と関連する要因が見つかりやすいかもしれません。<br><br>双極性障害の方は特にグラフの動きに注意してみるといいでしょう。自分が躁状態なのか、うつ状態なのかを常にモニタリングすることは大切です。たとえば躁状態のときには気分が高揚しなんでもできる気になってしまいますが、ここで行動しすぎると次のうつの波が深くなると言われています。</p>
    </div>
    <div class="container-discription mt-5 pb-5">
        <p class="discription">●このアプリは実際のカウンセリングシートを参考に作成されたものですが、臨床心理士さん等の監修を受けたものではありません。自己責任の範疇でご利用ください。しかし、毎週カウンセリングに通い、何枚もの紙に記入して心理士の助言を受けるよりもっと簡単で手軽な方法です。また、蓄積したデータとグラフの一定期間分を１枚に印刷し、実際にカウンセリングで提示してみることも有用な使い方かもしれません。</p>
    </div>
</div>

@endsection