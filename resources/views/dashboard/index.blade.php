@extends('layouts.dashboard_master')


@section ('content')


<div class="row column_title">
    <div class="col-md-12">
       <div class="page_title">
          <h2>Dashboard</h2>
       </div>
    </div>
 </div>


 <div class="row column1">
    <div class="col-md-6 col-lg-3">
       <div class="full counter_section margin_bottom_30">
          <div class="couter_icon">
             <div>
                <i class="fa fa-user yellow_color"></i>
             </div>
          </div>
          <div class="counter_no">
             <div>
                <p class="total_no">{{ $users->count() }}</p>
                <p class="head_couter">Users</p>
             </div>
          </div>
       </div>
    </div>
    <div class="col-md-6 col-lg-3">
       <div class="full counter_section margin_bottom_30">
          <div class="couter_icon">
             <div>
                <i class="fa fa-rss blue1_color"></i>
             </div>
          </div>
          <div class="counter_no">
             <div>
                <p class="total_no">{{ $blogs->count() }}</p>
                <p class="head_couter">Blogs</p>
             </div>
          </div>
       </div>
    </div>
    <div class="col-md-6 col-lg-3">
       <div class="full counter_section margin_bottom_30">
          <div class="couter_icon">
             <div>
                <i class="fa fa-eye green_color"></i>
             </div>
          </div>
          <div class="counter_no">
             <div>
                <p class="total_no">{{ $blogs->sum('visitor_count') }}</p>
                <p class="head_couter">Views</p>
             </div>
          </div>
       </div>
    </div>
    <div class="col-md-6 col-lg-3">
       <div class="full counter_section margin_bottom_30">
          <div class="couter_icon">
             <div>
                <i class="fa fa-comments-o red_color"></i>
             </div>
          </div>
          <div class="counter_no">
             <div>
                <p class="total_no">{{ $comments->count() }}</p>
                <p class="head_couter">Comments</p>
             </div>
          </div>
       </div>
    </div>
 </div>



@endsection
