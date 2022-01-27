@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            問題追加
            <div class="addform">
                @csrf
                <p>カテゴリ</p>
                <input type="text" name="category" class="">


            　　<li style=list-style-type:none><a href="{{ url('/quiztable')}}">完了</a></li>
           </div>
        </div>
    </div>
</div>
@endsection
