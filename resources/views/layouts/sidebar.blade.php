{{-- sidebar --}}

<div class="col-lg-4">
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
</div>
