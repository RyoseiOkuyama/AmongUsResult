@extends('results.result_index')
    
@section('content')   
    <div class='contents'>   
        <form action="/results/result_create3">
            <h1>参加者は？</h1>
                @foreach ($players->where('community_id', $select_community) as $player)
                    <input type='checkbox' name="players_array[]"  value='{{ $player->id }}'>
                        {{ $player->name }}
                    </input>
                @endforeach
            <h1>レギュレーションを選択してください</h1>
                <select class="used-regulation" name="regulation">
                    @foreach ($regulations->where('community_id', $select_community) as $regulation)
                        <option value={{ $regulation->id }} >{{ $regulation->id }}</option>
                    @endforeach
                </select>
            <input type="hidden" name="community" value="{{ $select_community }}">
            <input type="submit" value="test"/>
        </form>
        <div class="back">[<a href="/results/result_create1">back</a>]</div>
    </div>
@endsection