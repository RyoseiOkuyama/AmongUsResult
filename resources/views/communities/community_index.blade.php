@extends('results.result_index')
    
@section('content')
    <div class='contents'>
        <h1>community一覧</h1>
        <div class='posts'>
            @foreach ($communities as $community)
                <p class='id'>{{ $community->id }}</p>
                <a href='/communities/{{ $community->id }}'  class='body'>{{ $community->name }}</a>
            @endforeach
        </div>
    </div>
@endsection