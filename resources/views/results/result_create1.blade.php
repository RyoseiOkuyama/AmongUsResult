@extends('results.result_index')
    
@section('content')
    <div class='contents'>
        <h1>戦績登録</h1>
            <div class="title">
                <form name='form'>
                    <h2>コミュニティを選択してください</h2>
                        <select class='select-community' id='community' name='community'>
                            @foreach ($communities as $community)
                                <option value={{ $community->id }} >{{ $community->name }}</option>
                            @endforeach
                        </select>
                    <h2>レギュレーションを選択してください</h2>
                        <select class="used-regulation" name="result[used_regulation]" id='regulation'>
                            @foreach ($regulations as $regulation)
                                <option value={{ $regulation->id }} @if(old('regulation_id') == $regulation->id) selected @endif>{{ $regulation->id }}</option>
                            @endforeach
                        </select>
                </form>
                <button onclick="select_community()">保存</button>
            </div>
            <script>
                function select_community() {
                    const community = document.form.community;
                    const number1 = community.selectedIndex;
                    const community_id = community.options[number1].value;
                    const regulation = document.form.regulation;
                    const number2 = regulation.selectedIndex;
                    const used_regulation = regulation.options[number2].value;
                    window.location.href = url = '/results/result_create2/' + community_id + '/' + used_regulation;
                };
            </script>
        
        <div class="back"><a href="/">戻る</a></div>
    </div>
@endsection