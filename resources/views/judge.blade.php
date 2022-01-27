@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           正誤判定
           <li style=list-style-type:none><a href="{{ url('/quiz')}}">次へ</a></li>
           <li style=list-style-type:none><a href="{{ url('/quiz')}}">前へ</a></li>
        </div>
    </div>
</div>
@endsection
