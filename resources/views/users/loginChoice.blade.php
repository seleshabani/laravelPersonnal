@extends('layouts.app')

@section('title', 'login mode')

@section('content')
    <div class="container">
        <a href="#" class="btn">par google</a>
        <a href="{{ route('login') }}" class="btn">par formulaire</a>
    </div>

@endsection