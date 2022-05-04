@extends('header')
    
@section('content')
    <div class='contents'>
        <form action='/communities/created' method="POST">
        @csrf
            <div class="title">
                <h2>コミュニティの名前を入力してください<span>(※必須項目)</span></h2>
                <input type="text" name="community[name]" placeholder="名前"/>
            </div>
            <div class="body">
                <h2>コミュニティの説明を入力してください</h2>
                <textarea name="community[body]" placeholder="コミュニティの説明"></textarea>
            </div>
            <div class='image'>
                <h2>コミュニティのアイコンを選んでください</h2>
                <input type="file" name="community[image]">
            </div>
            <input class="submit" type="submit" value="作成"/>
        </form>
    </div>
@endsection