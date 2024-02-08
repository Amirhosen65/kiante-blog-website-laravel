@extends('layouts.frontend_master')

@section('content')

<div class="container">
    <div class="breadcrumb-area">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1 class="theme-breacrumb-title">About</h1>
            </div>
        </div>
    </div>
</div>

<!-- about-area start -->
<div class="about-area pd-top-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="media-post-wrap mb-0">
                    <div class="thumb mb-5">
                        <img class="w-100" src="{{ asset('frontend_asset/assets/img') }}/{{ $identy->about_image }}" alt="img">
                    </div>
                    <h3>
                        Welcome
                    </h3>
                    <p class="mb-5">{{ $identy->about_text }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about-area end -->

@endsection

