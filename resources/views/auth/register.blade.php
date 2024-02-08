
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <!-- Title -->
    <title>Neptune - Responsive Admin Dashboard Template</title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link href="{{ asset('dashboard_assets') }}/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('dashboard_assets') }}/assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
    <link href="{{ asset('dashboard_assets') }}/assets/plugins/pace/pace.css" rel="stylesheet">

    
    <!-- Theme Styles -->
    <link href="{{ asset('dashboard_assets') }}/assets/css/main.min.css" rel="stylesheet">
    <link href="{{ asset('dashboard_assets') }}/assets/css/custom.css" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('dashboard_assets') }}/assets/images/neptune.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('dashboard_assets') }}/assets/images/neptune.png" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="app app-auth-sign-up align-content-stretch d-flex flex-wrap justify-content-end">
        <div class="app-auth-background">

        </div>
        <div class="app-auth-container">
            <div class="logo">
                <a href="index.html">Neptune</a>
            </div>
            <p class="auth-description">Please enter your credentials to create an account.<br>Already have an account? <a href="{{ route('login') }}">Sign In</a></p>

            <form method="POST" action="{{ route('register') }}">
                @csrf
            <div class="auth-credentials m-b-xxl">
                <label for="signUpUsername" class="form-label">Name</label>
                <input type="name" class="form-control m-b-md @error('name') is-invalid @enderror" name="name" id="signUpUsername" aria-describedby="signUpUsername" placeholder="Enter Name">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <label for="signUpEmail" class="form-label">Email address</label>
                <input type="email" class="form-control m-b-md @error('email') is-invalid @enderror" name="email" id="signUpEmail" aria-describedby="signUpEmail" placeholder="example@neptune.com">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <label for="signUpPassword" class="form-label">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="signUpPassword" aria-describedby="signUpPassword" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <div id="emailHelp" class="form-text m-b-md">Password must be minimum 8 characters length*</div>

                <label for="signUpPassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" name="password_confirmation" id="signUpPassword" aria-describedby="signUpPassword" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;">
            </div>

            <div class="auth-submit">
                <button type="submit" class="btn btn-primary">Sign Up</button>
            </div>
            <div class="divider"></div>    
            </form>        
        </div>
    </div>
    
    <!-- Javascripts -->
    <script src="{{ asset('dashboard_assets') }}/assets/plugins/jquery/jquery-3.5.1.min.js"></script>
    <script src="{{ asset('dashboard_assets') }}/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ asset('dashboard_assets') }}/assets/plugins/perfectscroll/perfect-scrollbar.min.js"></script>
    <script src="{{ asset('dashboard_assets') }}/assets/plugins/pace/pace.min.js"></script>
    <script src="{{ asset('dashboard_assets') }}/assets/js/main.min.js"></script>
    <script src="{{ asset('dashboard_assets') }}/assets/js/custom.js"></script>
</body>
</html>