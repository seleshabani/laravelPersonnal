@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
<div class="top-header">
    <div class="right-content">
        <div class="post-item big-post-item">
            <div class="post-img">
                <img src="img/alison-wang-mou0S7ViElQ-unsplash.jpg" alt="">
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
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Consectetur dolore modi ipsam repellat id adipisci.
                </a>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Rem excepturi nobis inventore ad modi non.
                    Eligendi dolore sint minus odio.
                </p>
            </div>
        </div>
        <div class="post-item min-post-item">
            <div class="post-img">
                <img src="img/braxton-apana-gmZPVLtfVVQ-unsplash.jpg" alt="">
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
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </a>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Rem excepturi nobis inventore ad modi non.
                    Eligendi dolore sint minus odio.
                </p>
            </div>
        </div>
    </div>
    <div class="left-content">
        <div class="post-item">
            <div class="post-img">
                <img src="img/yogendra-singh-jWGNA5VIMRg-unsplash.jpg" alt="">
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
                    Lorem ipsum dolor sit amet consectetur.
                </a>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </p>
            </div>
        </div>
        <div class="post-item">
            <div class="post-img">
                <img src="img/158076482_5140434096027051_1989582238198469717_n.jpg" alt="">
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
                    Lorem ipsum dolor sit amet consectetur.
                </a>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </p>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="daily-news">
        <h2 class="section-title">Daily news</h2>
        <div class="daily-news-items">
            <div class="daily-news-items-item">
                <div class="img">
                    <img src="img/158076482_5140434096027051_1989582238198469717_n.jpg" alt="">
                </div>
                <div class="text">
                    <div class="cat-and-autor">
                        <span class="cat">lorem ipsum</span>
                        <span class="autor">Sele shabani</span>
                    </div>
                    <a href="" class="title">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, qui.
                    </a>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Dolor sapiente rerum nesciunt architecto animi, unde cumque quisquam! 
                        Doloremque, quidem magni.
                    </p>
                </div>
            </div>
            <div class="daily-news-items-item">
                <div class="img">
                    <img src="img/158076482_5140434096027051_1989582238198469717_n.jpg" alt="">
                </div>
                <div class="text">
                    <div class="cat-and-autor">
                        <span class="cat">lorem ipsum</span>
                        <span class="autor">Sele shabani</span>
                    </div>
                    <a href="" class="title">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, qui.
                    </a>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Dolor sapiente rerum nesciunt architecto animi, unde cumque quisquam! 
                        Doloremque, quidem magni.
                    </p>
                </div>
            </div>
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