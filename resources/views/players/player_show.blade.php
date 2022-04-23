@extends('results.result_index')
    
@section('content')
    <div class="contents">
        <div class="">
            <p style="color:#{{ $player->color }};" class='player_name'>名前:{{ $player->name }}</p>
            <p>総試合数:{{ $player->results->count() }}試合</p>
            <p>{{ $player->results->where('winner', 'clue')->count() }}</p>
            @php 
                if($player->results->count() != 0){
                    $clue_win = floor($player->results->where('winner', 'clue')->count() / $player->results->count() * 100);
                } else {
                    $clue_win = 0;
                }
            @endphp
            <p>クルー勝率:{{ $clue_win }}% </p>
        <div class="footer">
            <a href="/communities/{{ $player->community_id }}">戻る</a>
        </div>
    </div>
@endsection