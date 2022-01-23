
@extends('layouts.app')

@section('title', $post->title)

@section('content')

<div class="container">
    <div class="single-container">
        <div class="post-container">
            <h1>{{ $post->title }}</h1>
            <div class="post-img">
                <img src="{{ route('displayImage',['filename'=>explode('/',$post->image)[1] ]) }}" alt="">
            </div>
            <div class="post-content">
                {!! Markdown::parse($post->content) !!}
            </div>

            <div class="post-comments">
                <h2 class="section-title">commentaires</h2>
                @foreach ($comments as $comment) 
                    <div>
                        {{ $comment->email }} - {{ $comment->comment }}
                    </div>
                @endforeach
            </div>
            <div class="post-action">
                <h2 class="section-title">Laissez un commentaire</h2>
                @auth
                    <form action="" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="form-input">
                                <input type="email" name="email" placeholder="email">
                            </div>
                            <div class="form-input">
                                <input type="text" name="name" placeholder="votre nom(pseudo)">
                            </div>
                        </div>
                        <div class="form-row">
                            <textarea name="comment" id="" cols="30" rows="10" placeholder="votre commentaire ici">
                                
                            </textarea>
                        </div>
                        <div class="form-action">
                            <button class="btn">Commenter</button>
                        </div>
                    </form>
                @else
                    <div>
                        <a href="{{ route('login') }}">vous devez être connecté pour laisser un commentaire</a>
                    </div>
                @endauth
               
            </div>
        </div>
    </div>
</div>

@endsection