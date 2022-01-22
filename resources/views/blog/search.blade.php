@extends('layouts.app')

@section('title', $query)

@section('content')
<div class="container">
    <div class="by-categories-content">
        <div class="post-content">
            <div class="daily-news-items">
                @foreach ($posts as $post) 
                    <div class="daily-news-items-item">
                        <div class="img">
                            
                            <img src="{{ route('displayImage',['filename'=>explode('/',$post->image)[1] ]) }}" alt="">
                        </div>
                        <div class="text">
                            <div class="cat-and-autor">
                                <span class="cat"></span>
                                <span class="autor">Sele shabani</span>
                            </div>
                            <a href="" class="title">
                                {{ $post->title }}
                            </a>
                            <p>
                                {!! Markdown::parse($post->content) !!}
                                {{-- {{ $post->content }} --}}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="pagination">
                <a class="btn" href="">
                </a>
            </div>
        </div>
    </div>

@endsection