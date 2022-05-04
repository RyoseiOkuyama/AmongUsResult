@extends('header')
    
@section('content')   
    <div class='contents'>
        <form action="/results/result_create3">
            <div class="players">
                <h1>参加者を選択してください</h1>
                    @foreach ($players->where('community_id', $select_community) as $player)
                        <div class="checkbox">
                            <input id="check-players" type='checkbox' name="players_array[]"  value='{{ $player->id }}'>
                                <label for="check-players">{{ $player->name }}</label>
                            </input>
                        </div>
                    @endforeach
            </div>
            <div class="regulation">
                <h1>レギュレーションを選択してください</h1>
                    <select class="select-regulation" name="regulation">
                        @foreach ($regulations->where('community_id', $select_community) as $regulation)
                            <option value={{ $regulation->id }} >{{ $regulation->id }}</option>
                        @endforeach
                </select>
            </div>
            <input type="hidden" name="community" value="{{ $select_community }}">
            <input class="submit" type="submit" value="次へ"/>
        </form>
        <div class="back">
            <p><a href="/results/result_create1">戻る</a></p>
        </div>  
    </div>
@endsection