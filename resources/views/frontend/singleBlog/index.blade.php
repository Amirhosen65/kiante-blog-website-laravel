@extends('layouts.frontend_master')

@section('content')


<!-- blog-area start -->
<div class="blog-area pd-top-100 pd-bottom-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="media-post-wrap mb-0">
                    <div class="thumb mb-4">
                        <img class="w-100" src="{{ asset('uploads/blog') }}/{{ $blog->image }}" alt="img">
                    </div>
                    <div class="media-body pt-1 ms-0">
                        <a class="tag top-right tag-red" href="{{ route('category.blogs',$blog->RelationCategory->id) }}">{{ $blog->RelationCategory->title }}</a>
                        <h1>{{ $blog->title }}</h1>
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
                    </div>

                    <p class="mb-3">
                        {!! html_entity_decode($blog->description) !!}
                    </p>


                    <div class="blog-tag-area mt-4">
                        <h4>Tags:</h4>
                        @forelse ($blog->ManyRelationTags as $tag)
                        <a href="{{ route('tag.blogs',$tag->id) }}">{{ $tag->title }}</a>
                        @empty
                        <h3>No found!</h3>
                        @endforelse
                    </div>
                </div>

                <div class="">
                    <h4 >{{ $comments->count() }} Comments</h4>
                    <ul class="comments">
                      <!--comment1-->
                      @foreach ($comments as $comment)
                        <li class="display-flex mt-4">
                            <div class="content meta ">
                          @if ($blog->RelationUser->id == $comment->user_id)
                            <img src="{{ asset('uploads/default') }}/{{ $blog->RelationUser->image }}" style="border-radius: 50%; height: 100px" alt="">
                          @else
                            <img src="{{ Avatar::create($comment->name)->toBase64() }}" />
                          @endif

                            <div style="margin-left: 10px">
                              <ul class="list-inline">
                                <li><a href="#"><b>{{ $comment->name }}</b> @if ($blog->RelationUser->id == $comment->user_id)
                                      <span class="badge text-bg-success" style="background-color: green; color: white">Author</span>
                                    @endif</a></li>
                                <li class="slash"></li>
                                <li>{{ \Carbon\Carbon::parse($comment->created_at)->diffForHumans() }}</li>
                              </ul>
                              <p>{{ $comment->message }}</p>
                            <a href="#comment" id="{{ $comment->id }}" onclick="myReply(event)" class="btn-reply get-comment-id"><i class="fa fa-reply"></i> Reply</a>
                            </div>

                          </div>

                          {{-- Comment Reply --}}

                          @foreach ($comment->relationWithReply as $reply)
                            <li class="display-flex mt-2" style="margin-left: 12%">
                                <div class="content meta ">
                              @if ($blog->RelationUser->id == $reply->user_id)
                                <img src="{{ asset('uploads/default') }}/{{ $blog->RelationUser->image }}" style="border-radius: 50%; height: 100px" alt="">
                              @else
                                <img src="{{ Avatar::create($reply->name)->toBase64() }}" />
                              @endif
                              <div style="margin-left: 10px">
                                  <ul class="list-inline">
                                    <li><a href="#">{{ $reply->name }} @if ($blog->RelationUser->id == $reply->user_id)
                                          <span class="badge text-bg-success" style="background-color: green; color: white">Author</span>
                                        @endif</a></li>
                                    <li class="slash"></li>
                                    <li>{{ \Carbon\Carbon::parse($reply->created_at)->diffForHumans() }}</li>
                                  </ul>

                                <p>{{ $reply->message }}</p>
                                <a href="#comment" id="{{ $reply->id }}" onclick="myReply(event)" class="btn-reply get-comment-id"><i class="fa fa-reply"></i> Reply</a>
                              </div>
                              </div>

                              {{-- Reply to reply --}}
                              @foreach ($reply->relationWithReply as $replyto)
                              <li class="comment-item mt-2 display-flex" style="margin-left: 20%">
                                <div class="content meta ">
                                  @if ($blog->RelationUser->id == $replyto->user_id)
                                    <img src="{{ asset('uploads/default') }}/{{ $blog->RelationUser->image }}" style="border-radius: 50%; height: 100px" alt="">
                                  @else
                                    <img src="{{ Avatar::create($replyto->name)->toBase64() }}" />
                                  @endif
                                  <div style="margin-left: 10px">
                                      <ul class="list-inline">
                                        <li><a href="#">{{ $replyto->name }} @if ($blog->RelationUser->id == $replyto->user_id)
                                              <span class="badge text-bg-success" style="background-color: green; color: white">Author</span>
                                            @endif</a></li>
                                        <li class="slash"></li>
                                        <li>{{ \Carbon\Carbon::parse($replyto->created_at)->diffForHumans() }}</li>
                                      </ul>
                                      <p>{{ $replyto->message }}</p>
                                    </div>
                                  </div>

                                </li>
                              @endforeach
                            </li>
                          @endforeach
                        </li>
                        <hr class="hr" />
                      @endforeach
                    </ul>

                    <!--Leave-comments-->
                    <div class="comments-form" id="comment">
                        <h4 >Leave a Comment</h4>
                        <!--form-->
                        <form class="form " action="{{ route('blog.comment') }}" method="POST" id="main_contact_form">
                            @csrf
                            @auth
                            <p>You are logged in as: <b>{{ auth()->user()->name }}</b></p>
                            @else
                                <p>Your email adress will not be published ,Requied fileds are marked*.</p>
                            @endauth
                            @if (session('success'))
                                <div class="alert alert-success contact_msg"  role="alert">
                                    Your comment has been submited successfully.
                                </div>
                            @endif
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="hidden" value="{{ $blog->id }}" name="blog_id" id="">
                                        <input type="hidden" class="push-id" value="" name="parent_id" id="">
                                        <input type="text" @auth hidden
                                            value="{{ auth()->user()->name }}"
                                        @endauth name="name" id="name" class="form-control @error('password') is-invalid @enderror" placeholder="Name*">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="form-group">
                                        <input type="email" @auth hidden
                                            value="{{ auth()->user()->email }}"
                                        @endauth name="email" id="email" class="form-control @error('password') is-invalid @enderror" placeholder="Email*" >
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12 ">
                                    <div class="form-group">
                                        <textarea name="message" id="message" cols="30" rows="5" class="form-control @error('password') is-invalid @enderror" placeholder="Message*"></textarea>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-12 ">


                                    <button type="submit" class="btn mt-2 btn-main">
                                        Send Comment
                                    </button>
                                </div>
                            </div>
                        </form>
                        <!--/-->
                    </div>

                  </div>

            </div>



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


        </div>
    </div>
</div>
<!-- blog-area end -->

@endsection

@section('footer_script')

<script>
    let getCommentId = document.querySelector('.get-comment-id')
    let inputPush = document.querySelector('.push-id')

    function myReply(event){
        inputPush.value = event.target.getAttribute('id')
    }

</script>


@endsection

