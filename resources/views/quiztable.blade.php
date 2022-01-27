@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            問題一覧
            <li style=list-style-type:none><a href="{{ url('/quizedit')}}">問題1</a></li>
            <li style=list-style-type:none><a href="{{ url('/quizedit')}}">問題2</a></li>
            <li style=list-style-type:none><a href="{{ url('/quizadd')}}">問題追加</a></li>
            <li style=list-style-type:none><a href="{{ url('/home')}}">トップへ</a></li>
        </div>
    </div>
</div>
@endsection
