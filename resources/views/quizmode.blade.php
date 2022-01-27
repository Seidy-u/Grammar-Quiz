@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            問題選択
            <li style=list-style-type:none><a href="{{ url('/quiz')}}">ALL</a></li>
            分野別
            <li style=list-style-type:none><a href="{{ url('/quiz')}}">品詞</a></li>
            <li style=list-style-type:none><a href="{{ url('/home')}}">トップへ</a></li>
        </div>
    </div>
</div>
@endsection
