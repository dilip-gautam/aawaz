<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <article class="post-item">
                        <div class="post-item-image">
                            <a href="post.html">
                                <img src="/img/Post_Image_1.jpg" alt="">
                            </a>
                        </div>
                        <div class="post-item-body">
                            <div class="padding-10">
                                <h2><a href="post.html">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos voluptas, blanditiis impedit repellat harum, eaque saepe aspernatur quo magnam obcaecati dolor! Deleniti quod repellendus non iste architecto, voluptate excepturi velit.</p>
                            </div>
    
                            <div class="post-meta padding-10 clearfix">
                                <div class="pull-left">
                                    <ul class="post-meta-group">
                                        <li><i class="fa fa-user"></i><a href="#"> Admin</a></li>
                                        <li><i class="fa fa-clock-o"></i><time> February 12, 2016</time></li>
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
                    <article class="post-item">
                        <div class="post-item-image">
                            <a href="post.html">
                                <img src="/img/Post_Image_2.jpg" alt="">
                            </a>
                        </div>
                        <div class="post-item-body">
                            <div class="padding-10">
                                <h2><a href="post.html">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos voluptas, blanditiis impedit repellat harum, eaque saepe aspernatur quo magnam obcaecati dolor! Deleniti quod repellendus non iste architecto, voluptate excepturi velit.</p>
                            </div>
    
                            <div class="post-meta padding-10 clearfix">
                                <div class="pull-left">
                                    <ul class="post-meta-group">
                                        <li><i class="fa fa-user"></i><a href="#"> Admin</a></li>
                                        <li><i class="fa fa-clock-o"></i><time> February 12, 2016</time></li>
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
                    <article class="post-item">
                        <div class="post-item-image">
                            <a href="post.html">
                                <img src="/img/Post_Image_3.jpg" alt="">
                            </a>
                        </div>
                        <div class="post-item-body">
                            <div class="padding-10">
                                <h2><a href="post.html">Lorem ipsum dolor sit amet, consectetur adipisicing elit, consectetur adipisicing elit</a></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos voluptas, blanditiis impedit repellat harum, eaque saepe aspernatur quo magnam obcaecati dolor! Deleniti quod repellendus non iste architecto, voluptate excepturi velit.</p>
                            </div>
    
                            <div class="post-meta padding-10 clearfix">
                                <div class="pull-left">
                                    <ul class="post-meta-group">
                                        <li><i class="fa fa-user"></i><a href="#"> Admin</a></li>
                                        <li><i class="fa fa-clock-o"></i><time> February 12, 2016</time></li>
                                        <li><i class="fa fa-tags"></i><a href="#"> Vue Js</a>, <a href="#"> Laravel</a></li>
                                        <li><i class="fa fa-comments"></i><a href="#">4 Comments</a></li>
                                    </ul>
                                </div>
                                <div class="pull-right">
                                    <a href="post.html">Continue Reading &raquo;</a>
                                </div>
                            </div>
                        </div>
                    </article>
    
                    <nav>
                      <ul class="pager">
                        <li class="previous disabled"><a href="#"><span aria-hidden="true">&larr;</span> Newer</a></li>
                        <li class="next"><a href="#">Older <span aria-hidden="true">&rarr;</span></a></li>
                      </ul>
                    </nav>
                </div>    
    </body>
</html>
