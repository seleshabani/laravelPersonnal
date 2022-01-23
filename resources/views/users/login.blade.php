@extends('layouts.app')

@section('title', 'login new user')

@section('content')
<div class="container">
    <form action="" method="post">
        @csrf
        <div class="input-el">
            <label for="">mail</label>
            <input type="text"name="email">
        </div>
        <div class="input-el">
            <label for="">password</label>
            <input type="text" name="password">
        </div>
        <button class="btn">connexion</button>
    </form>
</div>
@endsection