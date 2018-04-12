@extends('layouts.app')

@section('content')
<main class="container left-container">
        <div class="row">
            @include('common-header')
<section class="sidebar col-lg-5 col-12" style="background-image: url({{ url('img/default-sidebar.jpg') }}">

                    <span class="menu-trigger animated fadeInDown">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </span>

                    <div class="site-info">
                        <div class="primary-info">
                            <h1>Writer</h1>
                            <p>A minimal blogging theme to put your content on show. <a href="post.html">Look at the features.</a> </p>

                            <p>Content is king</p>
                        </div>
                        <div class="secondary-info">
                            <p>
                                <a class="btn btn-primary" href="#"><i class="fa fa-user-plus"></i>Join Our Newsletter</a>
                            </p>
                        </div>
                    </div>
                </section><!-- end sidebar -->

                <section class="col-lg-7 col-12 ml-auto main-content">

                    <div class="sub-nav">
                        <a href="#" class="select-posts active">Posts</a>
                        <!-- <a href="#" class="select-categories">Categories</a> -->
                    </div>

                    <div class="home-page-posts animated fadeIn ">
                        @foreach($posts as $key => $post)
                        <article class="post">
                            <div class="post-preview col-10  no-gutter">
                                <h2><a href="/post/{{ $post['id'] }}">{{ $post['title']['rendered'] }}</a></h2>

                                <p class="meta">
                                    {{ $post['_embedded']['author']['0']['name'] }} / {{ date('F j, Y', strtotime($post['date'])) }}
                                </p>
                            </div>

                            <div class=" col-2  no-gutter">
                                <img src="{{ $post['_embedded']['author']['0']['avatar_urls']['48'] }}" class="user-icon" alt="user-image">
                            </div>
                        </article>
                        @endforeach
                    </div><!-- Home page posts -->

                    <div class="home-page-categories hide animated fadeIn ">
                        <div class="category row">
                                <div class="category-preview col-6 col-sm-4  ">
                                    <h2>Easy Living</h2>
                                    <a href="category.html"><img src="{{ url('img/cover-2.jpg') }}" alt="category-image"></a>
                                </div>

                                <div class="category-preview col-6 col-sm-4  ">
                                    <h2>Adventure</h2>
                                    <a href="category.html"><img src="{{ url('img/cover-4.jpg') }}" alt="category-image"></a>
                                </div>

                                <div class="category-preview col-6 col-sm-4  ">
                                    <h2>Storytime</h2>
                                    <a href="category.html"><img src="{{ url('img/cover-6.jpg') }}" alt="category-image"></a>
                                </div>

                                <div class="category-preview col-6 col-sm-4  ">
                                    <h2>Open Roads</h2>
                                     <a href="category.html"><img src="{{ url('img/cover-9.jpg') }}" alt="category-image"></a>
                                </div>

                                <div class="category-preview col-6 col-sm-4  ">
                                    <h2>Gaming</h2>
                                    <a href="category.html"><img src="{{ url('img/cover-1.jpg') }}" alt="category-image" ></a>
                                </div>

                                <div class="category-preview col-6 col-sm-4  ">
                                    <h2>City Life</h2>
                                     <a href="category.html"><img src="{{ url('img/cover-3.jpg') }}" alt="category-image"></a>
                                </div>

                                <div class="category-preview col-6 col-sm-4  ">
                                    <h2>Rave Culture</h2>
                                     <a href="category.html"><img src="{{ url('img/cover-5.jpg') }}" alt="category-image"></a>
                                </div>

                                <div class="category-preview col-6 col-sm-4  ">
                                    <h2>Photography</h2>
                                    <a href="category.html"><img src="{{ url('img/cover-7.jpg') }}" alt="category-image"></a>
                                </div>

                                <div class="category-preview col-6 col-sm-4  ">
                                    <h2>Animal Kingdom</h2>
                                     <a href="category.html"><img src="{{ url('img/cover-8.jpg') }}" alt="category-image"></a>
                                </div>

                                <div class="category-preview col-6 col-sm-4  ">
                                    <h2>Beach</h2>
                                    <a href="category.html"><img src="{{ url('img/cover-10.jpg') }}" alt="category-image"></a>
                                </div>

                                <div class="category-preview col-6 col-sm-4  ">
                                    <h2>Climbing</h2>
                                     <a href="category.html"><img src="{{ url('img/cover-11.jpg') }}" alt="category-image"></a>
                                </div>

                                <div class="category-preview col-6 col-sm-4  ">
                                    <h2>Mystery</h2>
                                     <a href="category.html"><img src="{{ url('img/cover-12.jpg') }}" alt="category-image"></a>
                                </div>

                        </div>
                    </div>
                    
                </section><!-- main content -->
                </div> <!--/row -->

    </main> <!-- /container -->
@endsection
