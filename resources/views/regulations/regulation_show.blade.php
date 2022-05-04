@extends('header')
    
@section('content') 
        <div class='contents'>
            <h1 class="title">
                {{ $regulation->id }}
            </h1>
            <div class="des_regulation">
                <p>合計人数:{{ $regulation->allnumber }}人</p>
                <p>クルーの人数:{{ $regulation->cluenumber }}人</p>
                <p>シェリフの人数:{{ $regulation->sheriffnumber }}人</p>
                <p>マッドメイトの人数:{{ $regulation->madmatenumber }}人</p>
                <p>インポスターの人数:{{ $regulation->impostornumber }}人</p>
                <p>コミュニティID:{{ $regulation->community_id }}</p>
            </div>
            <div class="footer">
                <a href="/communities/community_index">戻る</a>
            </div>
        </div>
@endsection