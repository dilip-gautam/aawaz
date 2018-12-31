@extends('layouts.main')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @foreach ($posts as $post)
                <article class="post-item">
                        <div class="post-item-image">
                            <a href="post.html">
                                <img src={{asset('img/Post_Image_2.jpg')}} alt="">
                            </a>
                        </div>
                        <div class="post-item-body">
                            <div class="padding-10">
                            <h2><a href="/post/{{$post->id}}">{{$post->title}}</a></h2>
                                <p>{!! $post->excerpthtml !!}</p>
                            </div>
    
                            <div class="post-meta padding-10 clearfix">
                                <div class="pull-left">
                                    <ul class="post-meta-group">
                                        <li><i class="fa fa-user"></i><a href="#"> {{$post->user->name}}</a></li>
                                        <li><i class="fa fa-clock-o"></i><time> {{$post->date}}</time></li>
                                        <li><i class="fa fa-tags"></i><a href="#"> Blog</a></li>
                                        <li><i class="fa fa-comments"></i><a href="#">4 Comments</a></li>
                                    </ul>
                                </div>
                                <div class="pull-right">
                                    <a href="post.html">Continue Reading &raquo;</a>
                                </div>
                            </div>
                        </div>
                    </article>
                        
                @endforeach
                
               
                <nav>
                {{ $posts->links()}}
                </nav>
            </div>

            @include('layouts.sidebar')
        </div>
    </div>

@endsection
