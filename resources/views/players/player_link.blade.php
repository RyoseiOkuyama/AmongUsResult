@extends('results.result_index')
    
@section('content')
    <div class="contents">
        <div class="">
            <form method="post" action='/players/{{ $player->id }}'>
                @csrf
                @method('PUT')
                <div>
                    <h2>このプレイヤーとリンクしますか？</h2>
                    <input type="hidden" name="player[user_id]" value={{ $user_id }}>
                    <input type="submit" value="リンクする">
                </div>
            </form>
        </div>
        <div class="footer">
            <a href="/players/player_show/{{ $player->id }}">戻る</a>
        </div>
    </div>
@endsection