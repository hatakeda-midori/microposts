@extends('layouts.app')

@section('content')
    <div class="center jumbotron">
        <div class="text-center">
            <h1>Welcome to the Microposts</h1>
            {{-- ユーザー登録ページへのリンク --}}
            {!! link_to_route('sinup.get' , 'Sing up now!' , [], ['class' => 'btn btn-lg btn-primary7]) !!}
        </div>
    </div>
@endsection