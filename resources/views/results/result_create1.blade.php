@extends('results.result_index')
    
@section('content')
    <div class='contents'>
        <h1>戦績登録</h1>
            <div class="title">
                <form name='form' action='/results/result_create2'>
                    <h2>コミュニティを選択してください</h2>
                        <select class='select-community' id='community' name='community'>
                            @foreach ($communities as $community)
                                <option value={{ $community->id }} >{{ $community->name }}</option>
                            @endforeach
                        </select>
                    
                    <input type='submit' value='test'>
                </form>
                <button>保存</button>
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