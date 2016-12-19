  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>EVENTube</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- Scripts -->
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <script>
          window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
            ]); ?>
          </script>

        </head>

        <body>
          <!-- Introduction -->
          <div id="login-page">
            <div class="container">
              <form class="form-login" role="form" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}
                <h2 class="form-login-heading">sign in now</h2>
                <div class="login-wrap">


                  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <!--<label for="email" class="col-md-4 control-label">E-Mail</label>-->

                    <div class="col-md-14">
                      <input placeholder="Email" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                      @if ($errors->has('email'))
                      <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                      </span>
                      @endif
                    </div>
                  </div>

                  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <!--<label for="password" class="col-md-4 control-label">Password</label>-->

                    <div class="col-md-14">
                      <input placeholder="Password" id="password" type="password" class="form-control" name="password" required>

                      @if ($errors->has('password'))
                      <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                      </span>
                      @endif
                    </div>
                  </div>
                  <br>

                  <div class="form-group">
                    <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
                  </div>

                  <hr>

                    <div class="login-social-link centered">
                    <p>or you can sign in via your social network</p>
                        <button class="btn btn-facebook" type="submit"><i class="fa fa-facebook"></i> Facebook</button>
                        <button class="btn btn-twitter" type="submit"><i class="fa fa-twitter"></i> Twitter</button>
                    </div>
                    <div class="registration">
                        Don't have an account yet?<br/>
                        <a class="" href="/register">
                            Create an account
                        </a>
                    </div>

                </div>  
                </form>  
              </div>
            </div>

            <!-- js placed at the end of the document so the pages load faster -->
            <script src="assets/js/jquery.js"></script>
            <script src="assets/js/bootstrap.min.js"></script>

            <!--BACKSTRETCH-->
            <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
            <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
            <script>
              $.backstretch("assets/img/Tomorrowland-18488.jpg", {speed: 500});
            </script>


          </body>
          </html>
