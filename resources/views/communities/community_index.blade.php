@extends('header')
    
@section('content')
    <div class='contents'>
        <h1>community一覧</h1>
        <div class='communities'>
            @foreach ($communities as $community)
                <h2><a href='/communities/{{ $community->id }}'  class='body'>名前: {{ $community->name }}</a></h2>
                <p>説明：{{ $community->body}}</p>
            @endforeach
        </div>
    </div>
@endsection