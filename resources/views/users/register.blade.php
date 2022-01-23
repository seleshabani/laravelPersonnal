@extends('layouts.app')

@section('title', 'login mode')

@section('content')
    <div class="container">
        <form action="" method="post">
            @csrf
            <div class="input-el">
                <label for="">nom</label>
                <input type="text" name="name" id="">
            </div>
            <div class="input-el">
                <label for="">mail</label>
                <input type="text"name="email">
            </div>
            <div class="input-el">
                <label for="">password</label>
                <input type="text" name="password">
            </div>
            <div class="input-el">
                <label for="">password confirmation</label>
                <input type="text" name="password_confirmation">
            </div>
            <button class="btn">s'inscrire</button>
        </form>

        @if ($errors->any())
            <div>
                <div>
                    {{ __('Whoops! Something went wrong.') }}
                </div>

                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    </div>

@endsection