@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
<div class="top-header">
    <div class="right-content">
        <div class="post-item big-post-item">
            <div class="post-img">
                <img src="{{ route('displayImage',['filename'=>explode('/',$topPosts[0]->image)[1] ]) }}" alt="">
                <div class="post-img-detail">
                    <div class="categorie">
                        <span>lorem ipsum</span>
                    </div>
                    <div class="stats">
                        <span><i class="far fa-eye"></i></span>
                        <span><i class="far fa-comments"></i></span>
                        <span><i class="far fas fa-share-alt"></i></span>
                    </div>
                </div>
            </div>
            <div class="post-resume">
                <a href="" class="title">
                {{ $topPosts[0]->title }}
                </a>
                <p>{{ $topPosts[0]->content }}
                </p>
            </div>
        </div>
        <div class="post-item min-post-item">
            <div class="post-img">
                <img src="{{ route('displayImage',['filename'=>explode('/',$topPosts[1]->image)[1]]) }}" alt="">
                <div class="post-img-detail">
                    <div class="categorie">
                        <span>lorem ipsum</span>
                    </div>
                    <div class="stats">
                        <span><i class="far fa-eye"></i></span>
                        <span><i class="far fa-comments"></i></span>
                        <span><i class="far fas fa-share-alt"></i></span>
                    </div>
                </div>
            </div>
            <div class="post-resume">
                <a href="" class="title">
                    {{ $topPosts[1]->title }}
                </a>
                <p>{{ $topPosts[1]->content }}</p>
            </div>
        </div>
    </div>
    <div class="left-content">
        <div class="post-item">
            <div class="post-img">
                <img src="{{ route('displayImage',['filename'=>explode('/',$topPosts[2]->image)[1] ]) }}" alt="">
                <div class="post-img-detail">
                    <div class="categorie">
                        <span>lorem ipsum</span>
                    </div>
                    <div class="stats">
                        <span><i class="far fa-eye"></i></span>
                        <span><i class="far fa-comments"></i></span>
                        <span><i class="far fas fa-share-alt"></i></span>
                    </div>
                </div>
            </div>
            <div class="post-resume">
                <a href="" class="title">
                    {{ $topPosts[2]->title }}
                </a>
                <p>{{ $topPosts[2]->content }}</p>
            </div>
        </div>
        <div class="post-item">
            <div class="post-img">
                <img src="{{ route('displayImage',['filename'=>explode('/',$topPosts[3]->image)[1] ]) }}" alt="">
                <div class="post-img-detail">
                    <div class="categorie">
                        <span>lorem ipsum</span>
                    </div>
                    <div class="stats">
                        <span><i class="far fa-eye"></i></span>
                        <span><i class="far fa-comments"></i></span>
                        <span><i class="far fas fa-share-alt"></i></span>
                    </div>
                </div>
            </div>
            <div class="post-resume">
                <a href="" class="title">{{ $topPosts[3]->title }}</a>
                <p>{{ $topPosts[3]->content }}</p>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="daily-news">
        <h2 class="section-title">Daily news</h2>
        <div class="daily-news-items">
            @foreach ($dailyPosts as $dPost)
                <div class="daily-news-items-item">
                    <div class="img">
                        <img src="{{ route('displayImage',['filename'=>explode('/',$dPost->image)[1] ]) }}" alt="">
                    </div>
                    <div class="text">
                        <div class="cat-and-autor">
                            <span class="cat">lorem ipsum</span>
                            <span class="autor">Sele shabani</span>
                        </div>
                        <a href="" class="title">{{ $dPost->title}} </a>
                        <p> {{ $dPost->content }} </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="latest-news">
        <h2 class="section-title">Latest news</h2>
        <div class="latest-news-items">
            <div class="latest-news-items-item">
                <div class="time">
                    <span class="dot">&middot;</span>
                    <span class="time-time">10h ago</span>
                </div>
                <a href="" class="title">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </a>
            </div>
        </div>
    </div>
</div>
@endsection