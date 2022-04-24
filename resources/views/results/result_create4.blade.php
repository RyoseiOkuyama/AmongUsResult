@extends('results.result_index')
    
@section('content')   
    <div class='contents'>   
        <form action="/results/result_created" method="POST">
            @csrf
            <h1>シェリフは？</h1>
                @foreach ($result->players as $player)
                    <input type='checkbox' name="players_sheriffs[]" value='{{ $player->id }}'>
                        {{ $player->name }}
                    </input>
                @endforeach
            <h1>マッドメイトは？</h1>
                @foreach ($result->players as $player)
                    <input type='checkbox' name="players_madmates[]" value='{{ $player->id }}'>
                        {{ $player->name }}
                    </input>
                @endforeach
            <h1>インポスターは？</h1>
                @foreach ($result->players as $player)
                    <input type='checkbox' name="players_impostors[]" value='{{ $player->id }}'>
                        {{ $player->name }}
                    </input>
                @endforeach
            <h1>勝利したのは？</h1>
                <select name="result[winner]">
                    @php $winners = [
                    'clue' => 'クルー陣営',
                    'impostor' => 'インポスター陣営',
                    ];
                    @endphp
                    
                    @foreach ($winners as $winner => $selected_winner)
                        <option value={{ $winner }}>{{ $selected_winner }}</option>
                    @endforeach
                </select>
                @foreach ($result->players as $player)
                    <input type='hidden' name="players_array[]" value='{{ $player->id }}'>
                @endforeach
            <input type="hidden" name="result[community_id]" value="{{ $result->community_id }}">
            <input type="hidden" name="result[regulation_id]" value="{{ $result->regulation_id }}">
            <input type="submit" value="入力完了"/>
        </form>
        <div class="back">[<a href="/results/result_create1">back</a>]</div>
    </div>
@endsection