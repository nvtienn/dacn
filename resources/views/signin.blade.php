<!DOCTYPE html>
<html lang="en" class="app">
<head>  
  <meta charset="utf-8" />
  <title>Musik | Web Application</title>
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="{{ URL::asset('bootstrap.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ URL::asset('animate.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ URL::asset('font-awesome.min.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ URL::asset('app1.css') }}" type="text/css" />  
    <!--[if lt IE 9]>
    <script src="js/ie/html5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script>
  <![endif]-->
</head>
<body class="bg-info dker">
  <section id="content" class="m-t-lg wrapper-md animated fadeInUp">    
    <div class="container aside-xl">
      <a class="navbar-brand block" href="index.html"><span class="h1 font-bold">Musik</span></a>
      <section class="m-b-lg">
        <header class="wrapper text-center">
          <strong>Sign in to get in touch</strong>
        </header>
        @if($errors->has('errorlogin'))
          <div class="alert alert-warning">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Warning: </strong> {{$errors->first('errorlogin')}}
          </div>
          @endif
        <form action="{{url('login')}}" method="POST" role="form">
          <div class="form-group">
            <input type="email" placeholder="Email" class="form-control rounded input-lg text-center no-border">
            @if($errors->has('email'))
              <p style="color:red">{{$errors->first('email')}}</p>
            @endif
          </div>
          <div class="form-group">
             <input type="password" placeholder="Password" class="form-control rounded input-lg text-center no-border">
             if($errors->has('password'))
              <p style="color:red">{{$errors->first('password')}}</p>
            @endif
          </div>
          <button type="submit" class="btn btn-lg btn-warning lt b-white b-2x btn-block btn-rounded">
          <i class="icon-arrow-right pull-right"></i><span class="m-r-n-lg">Sign in</span></button>
          <div class="text-center m-t m-b"><a href="#"><small>Forgot password?</small></a></div>
          <div class="line line-dashed"></div>
          <p class="text-muted text-center"><small>Do not have an account?</small></p>
          <a href="signup.html" class="btn btn-lg btn-info btn-block rounded">Create an account</a>
          {!! csrf_field() !!}
        </form>
      </section>
    </div>
  </section>
  <!-- footer -->
  <footer id="footer">
    <div class="text-center padder">
      <p>
        <small>Web app framework base on Bootstrap<br>&copy; 2014</small>
      </p>
    </div>
  </footer>
  <!-- / footer -->
  <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
  <!-- Bootstrap -->
  <script src="{{ URL::asset('js/bootstrap.js') }}"></script>
</body>
</html>