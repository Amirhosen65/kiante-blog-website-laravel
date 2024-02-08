@extends('layouts.frontend_master')

@section('content')


<div class="container">
    <div class="breadcrumb-area">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1 class="theme-breacrumb-title">#{{ $tag_name->title }}</h1>

            </div>
        </div>
    </div>
</div>

<!-- blog-area start -->
<div class="blog-area pd-top-100 pd-bottom-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">

                @forelse ($blogs as $blog)
                <div class="media-post-wrap pd-bottom-80 mb-0">
                    <div class="thumb mb-4">
                        <img class="w-100" src="{{ asset('uploads/blog') }}/{{ $blog->image }}" alt="img">
                    </div>
                    <div class="media-body pt-1 ms-0">
                        <a class="tag top-right tag-purple" href="{{ route('category.blogs',$blog->RelationCategory->id) }}">{{ $blog->RelationCategory->title }}</a>
                        <h1><a href="{{ route('single.blog',$blog->id) }}">{{ $blog->title }}</a></h1>
                    </div>
                    <div class="meta d-flex">
                        <div class="author">
                            <div class="thumb">
                                <img src="{{ asset('uploads/default') }}/{{ $blog->RelationUser->image }}" alt="img">
                            </div>
                            <a href="#">{{ $blog->RelationUser->name }}</a>
                        </div>
                        <div class="date">
                            <i class="fa fa-clock-o"></i>
                            {{ \Carbon\Carbon::parse($blog->date)->format("M d, Y") }}
                        </div>
                        <div class="date">
                            <i class="fa fa-eye"></i> {{ $blog->visitor_count }} <i class="fa fa-comment"></i> 0
                        </div>
                    </div>
                    <p class="mb-3">
                        <?php
                            $blog_des = strip_tags($blog->description);
                            $blog_id = $blog->id;
                            if(strlen($blog_des > 250)):
                                $blog_cut = substr($blog_des,0,200);
                                $endpoint = strrpos($blog_cut, " ");
                                $blog_des = $endpoint?substr($blog_cut,0,$endpoint):substr($blog_cut,0);
                                $blog_des .="...";
                            endif;
                            echo $blog_des;
                        ?>
                    </p>

                    <a class="btn btn-main mt-3" href="{{ route('single.blog',$blog->id) }}">Read More</a>
                </div>
                @empty
                 <h1 class="text-center text-danger">Not found!</h1>
                 @endforelse

                 {{-- pagination --}}
                <div class="pagination-area text-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            @if ($blogs->onFirstPage())
                          <li class="page-item disabled"><a class="page-link" href="#"><i class="fa fa-long-arrow-left"></i></a></li>
                          @else
                          <li class="page-item"><a class="page-link" href="{{ $blogs->previousPageUrl() }}"><i class="fa fa-long-arrow-left"></i></a></li>
                          @endif
                          @foreach ($blogs->getUrlRange(1, $blogs->lastPage()) as $page => $url)
                                @if ($page == $blogs->currentPage())
                                    <li class="page-item"><a class="page-link active" href="{{ $url }}">{{ $page }}</a></li>

                                @else
                                <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>

                                @endif
                            @endforeach

                            @if ($blogs->hasMorePages())
                            <li class="page-item"><a class="page-link" href="{{ $blogs->nextPageUrl() }}"><i class="fa fa-long-arrow-right"></i></a></li>
                            @else
                            <li class="page-item disabled"><a class="page-link" href="{{ $blogs->nextPageUrl() }}"><i class="fa fa-long-arrow-right"></i></a></li>

                            @endif

                        </ul>
                    </nav>
                </div>

            </div>


{{-- sidebar --}}

{{-- <div class="col-lg-4">
    <div class="side-area">
        <div class="widget widget_search">
            <h5 class="widget-title">
                Search
            </h5>
            <div class="subscribe-inner">
                <form action="{{ route('search.blogs') }}" method="GET">
                <input type="text" name="search_blog">
                <button type="submit" class="btn">Search</button>
                </form>
            </div>
        </div>
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
                    <div class="tag"><a href="#">{{ $blog->RelationCategory->title }}</a></div>
                    <div class="date">
                        <i class="fa fa-clock-o"></i>
                        {{ \Carbon\Carbon::parse($blog->date)->diffForHumans() }}
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        <div class="widget widget_list mt-5">
            <h4 class="widget-title">Categories</h4>
            <ul class="list-inner">
                @forelse ($categories as $category)
            <li><a href="{{ route('category.blogs',$category->id) }}">{{ $category->title }}</a></li>
            @empty
            <h3 class="text-center text-danger">Not found!</h3>
            @endforelse
            </ul>
        </div>

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

    </div>

    <div class="ad-area">
        <a href="#">
            <img src="{{ asset('frontend_asset/assets') }}/img/ad/add.png" alt="img">
        </a>
    </div>
</div> --}}


        </div>
    </div>
</div>
<!-- blog-area end -->


@endsection
