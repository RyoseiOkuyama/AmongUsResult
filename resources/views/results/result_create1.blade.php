@extends('header')
    
@section('content')
    <div class='contents'>
        <h1>戦績登録</h1>
            <form name='form' action='/results/result_create2'>
                <div class="community">
                    <h2>コミュニティを選択してください</h2>
                        <select class='select-community' id='community' name='community'>
                            @foreach ($communities as $community)
                                <option value={{ $community->id }} >{{ $community->name }}</option>
                            @endforeach
                        </select>
                </div>
                <input class="submit" type='submit' value='次へ'>
            </form>
        <div class="back">
            <p><a href="/">戻る</a></p>
        </div>
    </div>
@endsection