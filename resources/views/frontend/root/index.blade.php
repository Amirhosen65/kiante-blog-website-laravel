
@extends('layouts.frontend_master')

@section('content')


<div class="container">
    <div class="braking-news-area">
        <div class="row">
            <div class="col-lg-12">
                <div class="braking-news-wrap">
                    <span>Braking News</span>

                    <div class="marquee">
                        <p>In the news: small businesses for expect revenue growth in 2022.</p>
                        <div class="breaking-news-post-date">March 16</div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- post-banner start -->
    <div class="post-banner-area pd-top-30">
        <div class="container-fluid p-0">
            <div class="post-banner-slider owl-carousel">
                <div class="item">
                    <div class="top-post-wrap mb-0">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <img src="{{ asset('frontend_asset/assets') }}/img/banner/1.jpg" alt="img">
                        </div>
                        <div class="top-post-details">
                            <a class="tag top-right tag-pest" href="#">Business</a>
                            <h2><a href="blog-category.html">In the news: small businesses for expect revenue growth in 2022.</a></h2>
                            <div class="meta mt-2">
                                <div class="user">
                                    <div class="thumb">
                                        <img src="{{ asset('frontend_asset/assets') }}/img/banner/user.jpg" alt="img">
                                    </div>
                                    <a href="#">Stiven Jackson</a>
                                </div>
                                <div class="date">
                                    <i class="fa fa-clock-o"></i>
						                Mar 16, 2022
                                </div>
                                <div class="comment">
                                    <i class="fa fa-comment-o"></i>0
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="top-post-wrap mb-0">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <img src="{{ asset('frontend_asset/assets') }}/img/banner/2.jpg" alt="img">
                        </div>
                        <div class="top-post-details">
                            <a class="tag top-right tag-purple" href="#">Marketing</a>
                            <h2><a href="blog-category.html">B2B cmos plan 2022 spending that rise, influencer marketing’s.</a></h2>
                            <div class="meta mt-2">
                                <div class="user">
                                    <div class="thumb">
                                        <img src="{{ asset('frontend_asset/assets') }}/img/banner/user.jpg" alt="img">
                                    </div>
                                    <a href="#">Stiven Jackson</a>
                                </div>
                                <div class="date">
                                    <i class="fa fa-clock-o"></i>
						                Mar 16, 2022
                                </div>
                                <div class="comment">
                                    <i class="fa fa-comment-o"></i>0
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="top-post-wrap mb-0">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <img src="{{ asset('frontend_asset/assets') }}/img/banner/2.jpg" alt="img">
                        </div>
                        <div class="top-post-details">
                            <a class="tag top-right tag-purple" href="#">Marketing</a>
                            <h2><a href="blog-category.html">B2B cmos plan 2022 spending that rise, influencer marketing’s.</a></h2>
                            <div class="meta mt-2">
                                <div class="user">
                                    <div class="thumb">
                                        <img src="{{ asset('frontend_asset/assets') }}/img/banner/user.jpg" alt="img">
                                    </div>
                                    <a href="#">Stiven Jackson</a>
                                </div>
                                <div class="date">
                                    <i class="fa fa-clock-o"></i>
						                Mar 16, 2022
                                </div>
                                <div class="comment">
                                    <i class="fa fa-comment-o"></i>0
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="top-post-wrap mb-0">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <img src="{{ asset('frontend_asset/assets') }}/img/banner/2.jpg" alt="img">
                        </div>
                        <div class="top-post-details">
                            <a class="tag top-right tag-purple" href="#">Marketing</a>
                            <h2><a href="blog-category.html">B2B cmos plan 2022 spending that rise, influencer marketing’s.</a></h2>
                            <div class="meta mt-2">
                                <div class="user">
                                    <div class="thumb">
                                        <img src="{{ asset('frontend_asset/assets') }}/img/banner/user.jpg" alt="img">
                                    </div>
                                    <a href="#">Stiven Jackson</a>
                                </div>
                                <div class="date">
                                    <i class="fa fa-clock-o"></i>
						                Mar 16, 2022
                                </div>
                                <div class="comment">
                                    <i class="fa fa-comment-o"></i>0
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- post-banner end -->

<div class="top-news-area pd-top-30 pd-bottom-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="section-title pb-0">
                    <h4 class="title left-line">Most Recent</h4>
                </div>
                <div class="row">
                    @forelse ($blogs as $blog)
                    <div class="col-lg-6">
                        <div class="media-post-wrap">
                            <div class="thumb mb-4">
                                <img src="{{ asset('uploads/blog') }}/{{ $blog->image }}" alt="img">
                            </div>
                            <div class="media-body ms-0">
                                <a class="tag top-right tag-red" href="{{ route('category.blogs',$blog->RelationCategory->id) }}">{{ $blog->RelationCategory->title }}</a>
                                <h4><a href="{{ route('single.blog',$blog->id) }}">{{ $blog->title }}</a></h4>
                            </div>
                            <div class="meta d-flex">
                                <div class="author">
                                    <div class="thumb">
                                        <img src="{{ asset('uploads/default') }}/{{ $blog->RelationUser->image }}" alt="img">
                                    </div>
                                    <a href="#">{{ $blog->RelationUser->name }}</a>
                                </div>
                                <div class="date ms-auto">
                                    <i class="fa fa-clock-o"></i>
                                    {{ \Carbon\Carbon::parse($blog->date)->format("M d, Y") }}
                                </div>
                                <div class="comment ms-auto" >
                                    <i class="fa fa-eye" ></i>{{ $blog->visitor_count }}<i class="fa fa-comment"></i>0
                                    {{-- <i class="fa fa-eye" ></i>{{ $blog->visitor_count }}<i class="fa fa-comment"></i>{{ $blog->commentsRelation-> }} --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                        <h2 class="text-center">No Blog Available Right Now!</h2>

                        @endforelse

                </div>
            </div>
            <div class="col-lg-4">
                <div class="section-title pb-0">
                    <h4 class="title left-line">Featured Posts</h4>
                </div>

                @forelse ($feature_blogs as $blog)
                <div class="media-post-wrap-3 media">
                    <div class="thumb">
                        <img src="{{ asset('uploads/blog') }}/{{ $blog->image }}" style="height: 98px; width: 94px; object-fit: cover" alt="img">
                    </div>
                    <div class="media-body">
                        <h6><a href="{{ route('single.blog',$blog->id) }}">{{ $blog->title }}</a></h6>
                        <div class="meta d-flex">
                            <div class="tag"><a href="{{ route('category.blogs',$blog->RelationCategory->id) }}">{{ $blog->RelationCategory->title }}</a></div>
                            <div class="date">
                                <i class="fa fa-clock-o"></i>
                                {{ \Carbon\Carbon::parse($blog->date)->format("M d, Y") }}
                            </div>
                        </div>
                    </div>
                </div>

                @empty

                        <h1 class="text-center">No Feature Post Available Right Now!</h1>

                        @endforelse

                        {{-- Weekly post --}}
                <div class="post-list-small-wrapper">
                    <div class="section-title pb-0">
                        <h4 class="title">Weekly Post</h4>
                    </div>
                    <div class="post-grid-slider owl-carousel">

                        @forelse ($blogsLastWeek as $blog)
                            <div class="item">
                                <div class="thumb">
                                    <img src="{{ asset('uploads/blog') }}/{{ $blog->image }}" alt="img">
                                </div>
                                <div class="details">
                                    <p>{{ $blog->title }}</p>
                                    <div class="meta d-flex">
                                        <div class="author">
                                            <div class="thumb">
                                                <img src="{{ asset('uploads/default') }}/{{ $tech_blogs->RelationUser->image }}" alt="img">
                                            </div>
                                            <a href="#">{{ $blog->RelationUser->name }}</a>
                                        </div>
                                        <div class="date">
                                            <i class="fa fa-clock-o"></i>
                                            {{ \Carbon\Carbon::parse($blog->date)->diffForHumans() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <div class="details">
                                <p class="text-danger text-center">No data found!</p>
                            </div>
                        @endforelse


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="ad-area pd-bottom-40">
    <div class="container">
        <a class="w-100" href="#"><img src="{{ asset('uploads/ads/kiante-ads.png') }}" alt="img"></a>
    </div>
</div>

<div class="top-news-area pd-top-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="section-title pb-0">
                    <h4 class="title left-line">Technology</h4>
                </div>

                    <div class="media-post-wrap mg-bottom-40">
                        <div class="thumb mb-4">
                            <img class="w-100" src="{{ asset('uploads/blog') }}/{{ $tech_blogs->image }}" alt="img">
                        </div>
                        <div class="media-body ms-0">
                            <a class="tag top-right tag-purple" href="{{ route('category.blogs',$blog->RelationCategory->id) }}">{{ $tech_blogs->RelationCategory->title }}</a>
                            <h2><a href="{{ route('single.blog',$tech_blogs->id) }}">{{  $tech_blogs->title }}</a></h2>
                        </div>
                        <div class="meta d-flex">
                            <div class="author">
                                <div class="thumb">
                                    <img src="{{ asset('uploads/default') }}/{{ $tech_blogs->RelationUser->image }}" alt="img">
                                </div>
                                <a href="#">{{ $tech_blogs->RelationUser->name }}</a>
                            </div>
                            <div class="date">
                                <i class="fa fa-clock-o"></i>
                                {{ \Carbon\Carbon::parse($tech_blogs->date)->format("M d, Y") }}
                            </div>
                            <div class="comment">
                                0
                            </div>
                        </div>
                    </div>


                <div class="row">

                    @foreach ($latestCategoryBlogs as $blog)
                        <div class="col-lg-6">
                            <div class="media-post-wrap-3 media">
                                <div class="thumb">
                                    <img src="{{ asset('uploads/blog') }}/{{ $blog->image }}" style="height: 98px; width: 94px; object-fit: cover" alt="img">
                                </div>
                                <div class="media-body">
                                    <h6><a href="{{ route('single.blog',$blog->id) }}">{{ $blog->title }}</a></h6>
                                    <div class="meta d-flex">
                                        <div class="tag"><a href="{{ route('category.blogs',$blog->RelationCategory->id) }}">{{ $blog->RelationCategory->title }}</a></div>
                                        <div class="date">
                                            <i class="fa fa-clock-o"></i>
                                            {{ \Carbon\Carbon::parse($blog->date)->format("M d, Y") }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
                <div class="section-title pb-0 pd-top-80">
                    <h4 class="title left-line">Videos</h4>
                </div>
                <div class="video-area">
                    <div class="top-post-wrap">
                        <div class="thumb">
                            <img src="{{ asset('frontend_asset/assets') }}/img/blog/nature.jpg" alt="img" style="opacity: 1;">
                            <a class="video-play-btn" href="#" data-effect="mfp-zoom-in"><img src="{{ asset('frontend_asset/assets') }}/img/icon/play.png" alt="img"></a>
                        </div>
                        <div class="top-post-details">
                            <a class="tag top-right tag-green" href="#">Travel</a>
                            <h2><a href="blog-category.html">I find that the harder I work, the more luck I seem to have.</a></h2>
                            <div class="meta mt-2">
                                <div class="user">
                                    <div class="thumb">
                                        <img src="{{ asset('frontend_asset/assets') }}/img/banner/user.jpg" alt="img" style="opacity: 1;">
                                    </div>
                                    <a href="#">Stiven Jackson</a>
                                </div>
                                <div class="date">
                                    <i class="fa fa-clock-o"></i>
                                        Mar 16, 2022
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="top-post-wrap mb-0">
                                <div class="thumb">
                                    <img src="{{ asset('frontend_asset/assets') }}/img/blog/protest.jpg" alt="img" style="opacity: 1;">
                                    <a class="video-play-btn" href="#" data-effect="mfp-zoom-in"><img src="{{ asset('frontend_asset/assets') }}/img/icon/play.png" alt="img"></a>
                                </div>
                                <div class="top-post-details">
                                    <a class="tag top-right tag-purple" href="#">Politics</a>
                                    <h4><a href="blog-category.html">Huge glacier collapses in Arge.</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="top-post-wrap mb-0">
                                <div class="thumb">
                                    <img src="{{ asset('frontend_asset/assets') }}/img/blog/footballer.jpg" alt="img" style="opacity: 1;">
                                    <a class="video-play-btn" href="#" data-effect="mfp-zoom-in"><img src="{{ asset('frontend_asset/assets') }}/img/icon/play.png" alt="img"></a>
                                </div>
                                <div class="top-post-details">
                                    <a class="tag top-right tag-blue" href="#">Sports</a>
                                    <h4><a href="blog-category.html">Madrid Hope To Beat Malaga.</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="section-title pb-0">
                    <h4 class="title left-line">Social Media</h4>
                </div>
                <ul class="social-wrap">
                    <li class="ms-0"><a href="#"><img src="{{ asset('frontend_asset/assets') }}/img/icon/facebook.svg" alt="img"></a></li>
                    <li class="me-0"><a href="#"><img src="{{ asset('frontend_asset/assets') }}/img/icon/twitter.svg" alt="img"></a></li>
                    <li class="ms-0"><a href="#"><img src="{{ asset('frontend_asset/assets') }}/img/icon/instagram.svg" alt="img"></a></li>
                    <li class="me-0"><a href="#"><img src="{{ asset('frontend_asset/assets') }}/img/icon/pinterestsvg.svg" alt="img"></a></li>
                </ul>
                <div class="section-title pb-0">
                    <h4 class="title left-line">Popular Posts</h4>
                </div>

                @foreach ($popular_blogs as $blog)
                <div class="media-post-wrap-3 media">
                    <div class="thumb">
                        <img src="{{ asset('uploads/blog') }}/{{ $blog->image }}" style="height: 98px; width: 94px; object-fit: cover" alt="img">
                    </div>
                    <div class="media-body">
                        <h6><a href="{{ route('single.blog',$blog->id) }}">{{ $blog->title }}</a></h6>
                        <div class="meta d-flex">
                            <div class="tag"><a href="{{ route('category.blogs',$blog->RelationCategory->id) }}">{{ $blog->RelationCategory->title }}</a></div>
                            <div class="date">
                                <i class="fa fa-clock-o"></i>
                                {{ \Carbon\Carbon::parse($blog->date)->diffForHumans() }}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                <div class="widget widget_tags mt-5">
                    <div class="section-title pb-0">
                        <h4 class="title left-line widget-title">Tags</h4>
                    </div>
                    <div class="tagcloud">
                        @forelse ($tags as $tag)
                        <a href="{{ route('tag.blogs',$tag->id) }}">{{ $tag->title }}</a>
                        @empty
                        <p class="text-danger">Not found!</p>
                        @endforelse
                    </div>
                </div>
                <div class="ad-area pd-top-90">
                    <a href="#">
                        <img src="{{ asset('frontend_asset/assets/img/ad/add.png') }}" alt="img">
                    </a>
                </div>
                <div class="widget widget_list mt-5">
                    <div class="section-title pb-0">
                        <h4 class="title left-line widget-title">Category list</h4>
                    </div>
                    <ul class="list-inner">
                        @forelse ($categories as $category)
                        <li><a href="{{ route('category.blogs',$category->id) }}">{{ $category->title }}</a></li>
                        @empty
                        <h3 class="text-center text-danger">Not found!</h3>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="pd-top-70 pd-bottom-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h4 class="title left-line">Don't Miss</h4>
                </div>
            </div>

            @foreach ($firstThreeBlogs as $blog)
                <div class="col-lg-4 col-md-6">
                    <div class="media-post-wrap">
                        <div class="thumb mb-4">
                            <img src="{{ asset('uploads/blog') }}/{{ $blog->image }}" alt="img">
                        </div>
                        <div class="media-body ms-0">
                            <a class="tag top-right tag-red" href="{{ route('category.blogs',$blog->RelationCategory->id) }}">{{ $blog->RelationCategory->title }}</a>
                            <h4><a href="{{ route('single.blog',$blog->id) }}">{{ $blog->title }}</a></h4>
                        </div>
                        <div class="meta d-flex">
                            <div class="author">
                                <div class="thumb">
                                    <img src="{{ asset('uploads/default') }}/{{ $tech_blogs->RelationUser->image }}" alt="img">
                                </div>
                                <a href="#">{{ $blog->RelationUser->name }}</a>
                            </div>
                            <div class="date ms-auto">
                                <i class="fa fa-clock-o"></i>
                                {{ \Carbon\Carbon::parse($blog->date)->diffForHumans() }}
                            </div>
                            <div class="comment ms-auto">
                                0
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>

<div class="container">
    <div class="subscribe-area" style="background-image: url({{ asset('frontend_asset/assets/img/ad/Subscribe-Box.png') }});">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title p-0">
                    <h2>Subscribe To Kiante</h2>
                    <p>Signup for our Newsletter and stay informed</p>
                </div>
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="subscribe-inner">
                    <input type="text" placeholder="Enter Email address">
                    <button>Subscribe</button>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection

