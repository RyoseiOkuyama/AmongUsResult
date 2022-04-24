@extends('results.result_index')
    
@section('content')
    <div class='contents'>
        <h1 class="title">{{ $result->id }}</h1>
        <div class="des_results">
            <p>{{ $result->community_id }}</p>
            <p>{{ $result->winner }}</p>
            <p>参加者
                @foreach($result->players as $player)
                    :{{ $player->name }}
                @endforeach
            </p>
        </div>
        <a href='/results/result_create4/{{ $result->id }}'>次の試合へ</a>
    </div>
@endsection