@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            問題
            <li style=list-style-type:none><a href="{{ url('/quizmode')}}">問題選択に戻る</a></li>
            <li style=list-style-type:none><a href="{{ url('/judge')}}">解答</a></li>
        </div>
    </div>
</div>
@endsection
