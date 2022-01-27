@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Menu') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Welcome. Here is the menu. Which one would you like to choose?') }}
                </div>
            </div>
            <li style=list-style-type:none><a href="{{ url('/quizmode')}}">問題一覧</a></li>
            <li style=list-style-type:none><a href="{{ url('/quiztable')}}">問題編集</a></li>
        </div>
    </div>
</div>
@endsection
