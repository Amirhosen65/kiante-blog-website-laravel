<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>{{ $identy->site_title }} - Admin Panel</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="{{ asset('dashboard_assets/assets') }}/images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{ asset('dashboard_assets/assets') }}/css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="{{ asset('dashboard_assets/assets') }}/style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="{{ asset('dashboard_assets/assets') }}/css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="{{ asset('dashboard_assets/assets') }}/css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="{{ asset('dashboard_assets/assets') }}/css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="{{ asset('dashboard_assets/assets') }}/css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="{{ asset('dashboard_assets/assets') }}/css/custom.css" />

        <!-- favicon -->
        <link rel="icon" href="{{ asset('frontend_asset/assets/img') }}/{{ $identy->favicon }}">

    {{-- summer note --}}
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
                     <div class="logo_section">
                        <a href="{{ route('home') }}"><img class="logo_icon img-responsive" src="{{ asset('frontend_asset/assets/img') }}/{{ $identy->logo }}" alt="#" /></a>
                     </div>
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" src="{{ asset('uploads/default') }}/{{ auth()->user()->image }}" alt="#" /></div>
                        <div class="user_info">
                           <h6>{{ auth()->user()->name }}</h6>
                           <p><span class="online_animation"></span> Online</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">
                  <h4>General</h4>
                  <ul class="list-unstyled components">

                     <li><a href="{{ route('home') }}"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a></li>
                     <li><a href="{{ route('users.index') }}"><i class="fa fa-users orange_color"></i> <span>Users</span></a></li>
                     <li><a href="{{ route('tag') }}"><i class="fa fa-tags   orange_color"></i> <span>Tags</span></a></li>
                     <li><a href="{{ route('category') }}"><i class="fa fa-pie-chart  orange_color"></i> <span>Category</span></a></li>
                     <li>
                        <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-rss red_color"></i> <span>Blogs</span></a>
                        <ul class="collapse list-unstyled" id="element">
                           <li><a href="{{ route('blog.index') }}">> <span>Blogs</span></a></li>
                           <li><a href="{{ route('blog.insert.view') }}">> <span>Add Blog</span></a></li>

                        </ul>
                     </li>
                     <li><a href="{{ route('contact.mailbox') }}"><i class="fa fa-envelope orange_color"></i> <span>Mailbox</span></a></li>
                     <li><a href="{{ route('site.identy') }}"><i class="fa fa-info-circle green_color"></i> <span>Site Identy</span></a></li>

                  </ul>
               </div>
            </nav>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               <div class="topbar">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <div class="full">
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                        <div class="logo_section">
                           <a href="index.html"><img class="img-responsive" src="{{ asset('dashboard_assets/assets') }}/images/logo/logo.png" alt="#" /></a>
                        </div>
                        <div class="right_topbar">
                           <div class="icon_info">
                              <ul>
                                 <li><a href="{{ route('root') }}" target="_blank"><i class="fa fa-eye"></i></a></li>

                                 <li><a href="{{ route('contact.mailbox') }}"><i class="fa fa-envelope-o"></i></a></li>
                              </ul>
                              <ul class="user_profile_dd">
                                 <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="{{ asset('uploads/default') }}/{{ auth()->user()->image }}" alt="#" /><span class="name_user">{{ auth()->user()->name }}</span></a>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" href="{{ route('profile.index') }}">My Profile</a>
                                       <a class="dropdown-item" href="#">Settings</a>
                                       <a class="dropdown-item" href="#">Help</a>

                                       <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        @csrf
                                        Log Out <i class="fa fa-sign-out"></i>
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>

                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </nav>
               </div>
               <!-- end topbar -->
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">

                    {{-- header end --}}

                {{-- content --}}
                @yield('content')

                     {{-- footer start --}}

                  </div>
                  <!-- footer -->
                  <div class="container-fluid">
                     <div class="footer">
                        <p>{{ $identy->footer }}
                        </p>
                     </div>
                  </div>
               </div>
               <!-- end dashboard inner -->
            </div>
         </div>
      </div>


      <!-- jQuery -->
      <script src="{{ asset('dashboard_assets/assets') }}/js/jquery.min.js"></script>
      <script src="{{ asset('dashboard_assets/assets') }}/js/popper.min.js"></script>
      <script src="{{ asset('dashboard_assets/assets') }}/js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="{{ asset('dashboard_assets/assets') }}/js/animate.js"></script>
      <!-- select country -->
      <script src="{{ asset('dashboard_assets/assets') }}/js/bootstrap-select.js"></script>
      <!-- owl carousel -->
      <script src="{{ asset('dashboard_assets/assets') }}/js/owl.carousel.js"></script>
      <!-- chart js -->
      <script src="{{ asset('dashboard_assets/assets') }}/js/Chart.min.js"></script>
      <script src="{{ asset('dashboard_assets/assets') }}/js/Chart.bundle.min.js"></script>
      <script src="{{ asset('dashboard_assets/assets') }}/js/utils.js"></script>
      <script src="{{ asset('dashboard_assets/assets') }}/js/analyser.js"></script>
      <!-- nice scrollbar -->
      <script src="{{ asset('dashboard_assets/assets') }}/js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="{{ asset('dashboard_assets/assets') }}/js/chart_custom_style1.js"></script>
      <script src="{{ asset('dashboard_assets/assets') }}/js/custom.js"></script>

      {{-- sweet alert script --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- summernote --}}
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    @yield('footer_script')
    @yield('login_alert')

   </body>
</html>
