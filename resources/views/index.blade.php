@extends('indexTemplate')

@section('title')
Tahnik's Blog @stop

@section('description')
This is a blog created and maintained by Tahnik Mustasin @stop

@section('social_script_top')
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.4";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
@stop

@section('body')
<div class="carousel slide" data-ride="carousel" data-pause="false" data-interval="4000">
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox" >
        <div id="f3" class="item active">
            <div class="carousel-caption">
                <span class="front_page">Bioshock Infinite is Awesome !</span>
            </div>
        </div>
        <div id="f2" class="item">
            <div class="carousel-caption">
                <span class="front_page">Nao Robot from Queen Mary</span>
            </div>
        </div>
        <div id="f1" class="item">
            <div class="carousel-caption">
                <span class="front_page">Intel Broadwell Processors are Out</span>
            </div>
        </div>
    </div>
</div>
<div class="container" id="main_body">
    <div class="row">
        <div class="col-md-8">
            @foreach($articles as $article)
                <div class="articles">
                    <h3 class="article_header text-center">{{ $article->title }}</h3>
                    <span class="article_date">Date: {{ $article->datePublished }}</span>
                    <img class="article_image" src="{{ url('/blog_images/' . $article->id . '.' . 'jpg') }}">
                    <p class="article_body text-justify">{!! \Illuminate\Support\Str::limit($article->body, 300) !!} <a
                                href="{{ url('/show_article', $article->id) }}">Read More</a></p>
                </div>
            @endforeach
        </div>
        <div id="main_about" class="col-md-4">
            <img class="center-block img-circle" style="width:30%;margin-top:20px;" src="resources/pp.jpg" alt="tahnikmustasin">
            <h3 class="text-center" style="padding-top:10px;color:brown">Author</h3>
            <h4 class="text-center">Tahnik Mustasin</h4>
            <span class="span-center">Hello World!</span>
            <p class="text-center">I am studying Computer Systems Engineering in Queen Mary, University of London. I am also working as an IT Consultant in Speiuss UK Healthcare</p>
            <script src="//platform.linkedin.com/in.js" type="text/javascript"></script>
            <script type="IN/MemberProfile" data-id="https://www.linkedin.com/in/tahnik" data-format="inline" data-related="false"></script>
            <div class="fb-follow" data-href="https://www.facebook.com/tahnik" data-width="300px" data-layout="standard" data-show-faces="true"></div>
            <a class="twitter-timeline" href="https://twitter.com/mstahnik" data-widget-id="614468916396576768">Tweets by @mstahnik</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        </div>
    </div>
</div>
@stop