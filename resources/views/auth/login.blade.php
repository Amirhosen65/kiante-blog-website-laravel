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
      <title>Pluto - Admin Login</title>

      <!-- favicon -->
    <link rel="icon" href="{{ asset('frontend_asset/assets/img/favicon.png') }}">

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
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="inner_page login">
      <div class="full_container">
         <div class="container">
            <div class="center verticle_center full_height">
               <div class="login_section">
                  <div class="logo_login">
                     <div class="center">
                        <img width="210" src="{{ asset('dashboard_assets/assets') }}/images/logo/logo.png" alt="#" />
                     </div>
                    </div>
                    <div class="login_form">
                      <h3 class="text-center mb-2">Admin Log In</h3>
                    <form role="form" action="{{ route('login') }}" method="POST">
                        @csrf
                        <fieldset>
                           <div class="field">
                                <label class="label_field">Email Address</label>
                                <input type="email" name="email" class="@error('email') is-invalid @enderror" placeholder="E-mail" />
                                @error('email')
                                    <span class="invalid-feedback text-center" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           </div>
                           <div class="field">
                              <label class="label_field">Password</label>
                              <input type="password" name="password" class="@error('password') is-invalid @enderror" placeholder="Password" />
                              @error('password')
                                    <span class="invalid-feedback text-center" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           </div>
                           <div class="field">
                              <label class="label_field hidden">hidden label</label>
                              <label class="form-check-label mr-2"><input type="checkbox" name="remember" class="form-check-input "> Remember Me</label>
                              <a class="forgot" href="{{ route('password.request') }}">Forgotten Password?</a>
                           </div>
                           <div class="field margin_0">
                              <label class="label_field hidden">hidden label</label>
                              <button class="main_bt">Sing In</button>
                           </div>
                        </fieldset>
                     </form>
                  </div>
               </div>
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
   </body>
</html>


