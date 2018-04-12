
@extends('layouts.app')

@section('content')
<header class="hero-image" role="banner" style="background-image: url('{{ $post['_embedded']['wp:featuredmedia'][0]['media_details']['sizes']['large']['source_url'] }}');">

    <span class="menu-trigger animated fadeInDown">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </span>
    @include('common-header')
</header>

<main class="container">
    <div class="row">
        <div class="col-xs-12 single-content">
            <p class="meta">
                {{ $post['_embedded']['author']['0']['name'] }} <i class="fa fa-bookmark"></i> {{ date('F j, Y', strtotime($post['date'])) }}
            </p>

            <h1>{{ $post['title']['rendered'] }}</h1>

            {{!! $post['content']['rendered'] !!}}

        </div><!-- main-content/col -->
    </div> <!--/row -->

</main> <!-- /container -->

<footer class="single">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-2">
                <img src="{{ $post['_embedded']['author']['0']['avatar_urls']['48'] }}" class="user-icon " alt="{{ $post['_embedded']['author']['0']['name'] }}">
            </div>
            <div class="col-xs-12 col-md-6">
                <div class="category-list">
                    <p>Published <span>{{ date('jS F Y', strtotime($post['date'])) }}</span></p>
                    <p>{{ $post['_embedded']['author']['0']['name'] }} </p>
                </div>
            </div><!-- end col -->
            <div class="col-xs-12 col-md-4">
                <div class="social">
                    <p>Share this article</a>
                    <div class="social-links">
                        <a class="social-icon" href="#" data-platform="twitter" data-message="Message about this post" data-url="http://writertheme.com/post"><i class="fa fa-twitter"></i></a>

                        <a class="social-icon" href="#" data-platform="facebook" data-message="Message about this post" data-url="http://writertheme.com/post"><i class="fa fa-facebook-official"></i></a>

                        <a class="social-icon" data-platform="mail"  href="mailto:support@writertheme.com"><i class="fa fa-envelope"></i></a>
                    </div>
                </div>
            </div>
        </div><!-- end row -->
    </div>

    <div class="row read-another-section">
        <div class="col-6 col-md-2 no-gutter read-another-container">
          <a href="post.html">
            <div class="overlay"></div>
            <img src="{{ url('img/square-iceland.jpg') }}">
            <h3 class="read-another">Land of Fire &amp; Ice</h3>
          </a>
        </div>
        <div class="col-6 col-md-2 no-gutter read-another-container">
        <a href="post.html">
            <div class="overlay"></div>
            <img src="{{ url('img/square-spain.jpg') }}">
            <h3 class="read-another">The Coast of Your Mind</h3>
        </a>
        </div>
        <div class="col-6 col-md-2 no-gutter read-another-container">
          <a href="post.html">
            <div class="overlay"></div>
            <img src="{{ url('img/square-peak.jpg') }}">
            <h3 class="read-another">Get Out of Your Comfort Zone</h3>
          </a>
        </div>
        <div class="col-6 col-md-2 no-gutter read-another-container">
            <a href="post.html">
            <div class="overlay"></div>
            <img src="{{ url('img/square-woods.jpg') }}">
            <h3 class="read-another">Not All Who Wander Are Lost</h3>
            </a>
        </div>
        <div class="col-6 col-md-2 no-gutter read-another-container">
            <a href="post.html">
            <div class="overlay"></div>
            <img src="{{ url('img/square-sunset.jpg') }}">
            <h3 class="read-another">Open Your Mind</h3>
            </a>
        </div>
        <div class="col-6 col-md-2 no-gutter read-another-container">
            <a href="post.html">
            <div class="overlay"></div>
            <img src="{{ url('img/square-mountain.jpg') }}">
            <h3 class="read-another">Ten Reasons to Hike</h3>
            </a>
        </div>
    </div>
</footer>
@endsection

