@extends('header')
    
@section('content')
    <div class='contents'>
        <form action='/players/created' method="POST">
            @csrf
            <h1>名前を入力してください</h1>
                <input type='text' name="player[name]">
            <h1>色を選択してください</h1>
                @php $colors = [
                '#ff0000' => '赤', '#000000' => '黒', '#ffffff' => '白', '#D34778' => 'バラ', '#0000ff' => '青', '#00ffff' => '水', '#ffff00' => '黄', '#ff00ff' => 'ピンク', '#800080' => '紫', '#008000' => '緑', '#ffa500' => 'オレンジ', '#ffdb2b' => 'バナナ', '#ff7f50' => 'コーラル(サンゴ)', '#00ff00' => '黄緑', '#808080' => 'グレー(灰)', '#800000' => 'あずき', '#a52a2a' => '茶', '#6F4B3E' => 'タン(淡茶)',
                ];
                @endphp
            <select name="player[color]">
                    @foreach ($colors as $color => $color_name)
                        <option value={{ $color }}>{{ $color_name }}色</option>
                    @endforeach
            </select>
            <input type="hidden" name="player[community_id]" value={{ $community->id }}>
            <input class="submit" type="submit" value="登録"/>
        </form>
                <a href="/communities/{{ $community->id }}">戻る</a>
        </div>
@endsection