@extends('layouts.main')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @if ( $posts->count() == '0')
                    <div class="alert alert-info">
                        <p>Sorry! There are no post on this category.</p>
                    </div>
                @else
                    @if (isset($categoryName))
                        <div class="alert alert-info">
                            <p><strong>{{$categoryName}}</strong></p>
                        </div>
                    @endif
                @foreach ($posts as $post)
                <article class="post-item">
                        <div class="post-item-image">
                            <a href="post.html">
                                <img src={{asset('img/Post_Image_2.jpg')}} alt="">
                            </a>
                        </div>
                        <div class="post-item-body">
                            <div class="padding-10">
                            <h2><a href="/post/{{$post->slug}}">{{$post->title}}</a></h2>
                                <p>{!! $post->excerpthtml !!}</p>
                            </div>
    
                            <div class="post-meta padding-10 clearfix">
                                <div class="pull-left">
                                    <ul class="post-meta-group">
                                        <li><i class="fa fa-user"></i><a href="#"> {{$post->user->name}}</a></li>
                                        <li><i class="fa fa-clock-o"></i><time> {{$post->date}}</time></li>
                                    <li><i class="fa fa-folder"></i><a href="/category/{{$post->category->slug}}"> {{$post->category->title}}</a></li>
                                        <li><i class="fa fa-comments"></i><a href="#">4 Comments</a></li>
                                    </ul>
                                </div>
                                <div class="pull-right">
                                    <a href="/post/{{$post->slug}}">Continue Reading &raquo;</a>
                                </div>
                            </div>
                        </div>
                    </article>
                        
                @endforeach
                @endif
                
                
                
               
                <nav>
                {{ $posts->links()}}
                </nav>
            </div>

            @include('layouts.sidebar')
        </div>
    </div>

@endsection
