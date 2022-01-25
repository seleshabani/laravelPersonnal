
@extends('layouts.app')

@section('title', 'faites une recherche')

@section('content')

<div class="container">
    <h1>Recherche</h1>
        <form action="{{ route('search')}}" method="get">
            @csrf
            <div class="input">
                <input type="text" name="query">
            </div>
            <button class="btn">recherche</button>
        </form>
</div>

@endsection