@extends('layouts.frontend_master')

@section('content')

<div class="container">
    <div class="breadcrumb-area">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1 class="theme-breacrumb-title">Contact</h1>
            </div>
        </div>
    </div>
</div>

<!-- about-area start -->
<div class="about-area pd-top-100 pd-bottom-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="media-post-wrap mb-0">
                    <div class="thumb mb-5">
                        <img class="w-100" src="{{ asset('frontend_asset/assets/img') }}/{{ $identy->contact_image }}" alt="img">
                    </div>
                    <h3>
                        Say Hello
                    </h3>
                    <p class="mb-5">{{ $identy->contact_text }}</p>
                    <h3 class="mt-5">Send Us a Message</h3>
                    <p>Your email address will not be published. All the fields are required.</p>

                    <form class="comment-form mt-5" action="{{ route('contacts.form') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label class="mb-3">Your Name</label>
                                <div class="single-input-wrap">
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="mb-3">Your Email</label>
                                <div class="single-input-wrap">
                                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <label class="mb-3">Subject</label>
                                <div class="single-input-wrap single-textarea-wrap">
                                    <input type="text" name="subject" class="form-control @error('subject') is-invalid @enderror">
                                    @error('subject')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <label class="mb-3">Message</label>
                                <div class="single-input-wrap single-textarea-wrap">
                                    <textarea rows="6" name="message" class="@error('message') is-invalid @enderror"></textarea>
                                    @error('message')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                            {!! NoCaptcha::display() !!}
                            @if ($errors->has('g-recaptcha-response'))
                                <span class="help-block text-danger">
                                    <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                </span>
                            @endif
                        </div>
                        </div>

                        <button type="submit" class="btn btn-main mt-3 mb-3">Submit</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="section-title pb-0">
                    <h4 class="title left-line">Popular Posts</h4>
                </div>
                <div class="media-post-wrap-3 media">
                    <div class="thumb">
                        <img src="{{ asset('frontend_asset/assets') }}/img/blog/obama.jpg" alt="img">
                    </div>
                    <div class="media-body">
                        <h6><a href="blog-category.html">Obama avoids crowds outside Edinburgh charity dinner.</a></h6>
                        <div class="meta d-flex">
                            <div class="tag"><a href="#">Politics</a></div>
                            <div class="date">
                                <i class="fa fa-clock-o"></i>
                                July 12, 2021
                            </div>
                        </div>
                    </div>
                </div>
                <div class="media-post-wrap-3 media">
                    <div class="thumb">
                        <img src="{{ asset('frontend_asset/assets') }}/img/blog/parliament-img.jpg" alt="img">
                    </div>
                    <div class="media-body">
                        <h6><a href="blog-category.html">Imagination is more important than knowledge buildup.</a></h6>
                        <div class="meta d-flex">
                            <div class="tag"><a href="#">Politics</a></div>
                            <div class="date">
                                <i class="fa fa-clock-o"></i>
                                July 12, 2021
                            </div>
                        </div>
                    </div>
                </div>
                <div class="media-post-wrap-3 media">
                    <div class="thumb">
                        <img src="{{ asset('frontend_asset/assets') }}/img/blog/paper-thumb.jpg" alt="img">
                    </div>
                    <div class="media-body">
                        <h6><a href="blog-category.html">Apollo astronauts harmed by a the deep space radiation.</a></h6>
                        <div class="meta d-flex">
                            <div class="tag"><a href="#">Politics</a></div>
                            <div class="date">
                                <i class="fa fa-clock-o"></i>
                                July 12, 2021
                            </div>
                        </div>
                    </div>
                </div>
                <div class="media-post-wrap-3 media">
                    <div class="thumb">
                        <img src="{{ asset('frontend_asset/assets') }}/img/blog/neon-light.jpg" alt="img">
                    </div>
                    <div class="media-body">
                        <h6><a href="blog-category.html">The golden rules of midlife fitness and things getting wrong.</a></h6>
                        <div class="meta d-flex">
                            <div class="tag"><a href="#">Politics</a></div>
                            <div class="date">
                                <i class="fa fa-clock-o"></i>
                                July 12, 2021
                            </div>
                        </div>
                    </div>
                </div>
                <div class="media-post-wrap-3 media">
                    <div class="thumb">
                        <img src="{{ asset('frontend_asset/assets') }}/img/blog/protest-1.jpg" alt="img">
                    </div>
                    <div class="media-body">
                        <h6><a href="blog-category.html">Huge glacier collapses in Arge.</a></h6>
                        <div class="meta d-flex">
                            <div class="tag"><a href="#">Politics</a></div>
                            <div class="date">
                                <i class="fa fa-clock-o"></i>
                                July 12, 2021
                            </div>
                        </div>
                    </div>
                </div>
                <div class="widget widget_tags mt-5">
                    <div class="section-title pb-0">
                        <h4 class="title left-line widget-title">Tags</h4>
                    </div>
                    <div class="tagcloud">
                        <a href="#">Business</a>
                        <a href="#">Digital Marketing</a>
                        <a href="#">Lifestyle</a>
                        <a href="#">Sports</a>
                        <a href="#">Technology</a>
                        <a href="#">Travel</a>
                        <a href="#">Trendy</a>
                        <a href="#">World</a>
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
<!-- about-area end -->

<div class="contact-g-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d29208.601361499546!2d90.3598076!3d23.7803374!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1589109092857!5m2!1sen!2sbd"></iframe>
</div>

@endsection

@section('footer_script')


    @if (session('success'))
    <script>

        Swal.fire({
        position: "center",
        icon: "success",
        title: "{{ session('success') }}",
        showConfirmButton: false,
        timer: 3000
        });

    </script>
    @endif


@endsection

