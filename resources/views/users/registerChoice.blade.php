@extends('layouts.app')

@section('title', 'register new user')

@section('content')
    <div class="container">
        <a href="#" class="btn">par google</a>
        <a href="{{ route('register') }}" class="btn">par formulaire</a>
    </div>

@endsection