@extends('header')
    
@section('content')   
    <div class='contents'>   
        <form action="/results/result_created" method="POST">
            @csrf
            <div class="select-roles">
                <div class="select-role">
                    <h1>シェリフを選択してください</h1>
                        @foreach ($players->whereIn('id', $select_players) as $player)
                            <div class="checkbox">
                                <input id="sheriff" class="checkbox" type='checkbox' name="players_sheriffs[]" value='{{ $player->id }}'>
                                    <label for="sheriff">{{ $player->name }}</label>
                                </input>
                            </div>
                        @endforeach
                </div>
                <div class="select-role">
                    <h1>マッドメイトを選択してください</h1>
                        @foreach ($players->whereIn('id', $select_players) as $player)
                            <div class="checkbox">
                                <input id="madmate" class="checkbox" type='checkbox' name="players_madmates[]" value='{{ $player->id }}'>
                                    <label for="madmate">{{ $player->name }}</label>
                                </input>
                            </div>
                        @endforeach
                </div>
                <div class="select-role">
                    <h1>インポスターを選択してください</h1>
                        @foreach ($players->whereIn('id', $select_players) as $player)
                            <div class="checkbox">
                                <input id="impostor" class="checkbox" type='checkbox' name="players_impostors[]" value='{{ $player->id }}'>
                                    <label for="impostor">{{ $player->name }}</label>
                                </input>
                            </div>
                        @endforeach
                </div>
            </div>
            <div class="winner">
                <h1>勝利した陣営を選択してください</h1>
                    <select class="select-winner" name="result[winner]">
                        @php $winners = [
                        'clue' => 'クルー陣営',
                        'impostor' => 'インポスター陣営',
                        ];
                        @endphp
                        @foreach ($winners as $winner => $selected_winner)
                            <option value={{ $winner }}>{{ $selected_winner }}</option>
                        @endforeach
                    </select>
            </div>
            @foreach ($players->whereIn('id', $select_players) as $player)
                <input type='hidden' name="players_array[]" value='{{ $player->id }}'>
            @endforeach
            <input type="hidden" name="result[community_id]" value="{{ $select_community }}">
            <input type="hidden" name="result[regulation_id]" value="{{ $select_regulation }}">
            <input class="submit" type="submit" value="登録"/>
        </form>
        <div class="back">
            <form name='form' action='/results/result_create2'>
                <input type="hidden" name="community" value="{{ $select_community }}">
                <input class="submit" type='submit' value='戻る'>
            </form>
        </div>
    </div>
@endsection