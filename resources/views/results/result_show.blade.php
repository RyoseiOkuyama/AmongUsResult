@extends('header')
    
@section('content')
    <div class='contents'>
        <h1>入力が完了しました</h1>
        <div class="des-results">
            <p class="title">リザルトID:{{ $result->id }}</p>
            <p>コミュニティID:{{ $result->community_id }}</p>
            <p>{{ $result->winner }}</p>
            <p>参加者
                @foreach($result->players as $player)
                    :{{ $player->name }}
                @endforeach
            </p>
            <a href='/results/result_create4/{{ $result->id }}'>次の試合へ</a>
        </div>
    </div>
@endsection