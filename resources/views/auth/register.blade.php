<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>MergeMe Register</title>

  <link href="/mergeme/resources/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <style>
        .has-error{
            color: #f00 !important;
        }
        .has-error input{
            border-color: #f00 !important;
        }
        select{
            padding: 0.6rem 1rem;
            border-radius: 10rem;
        }
    </style>
  <!-- Custom styles for this template-->
<link href="/mergeme/resources/css/sb-admin-2.min.css" rel="stylesheet">

</head>
<body class="bg-gradient-primary">

<div class="container">

<div class="card o-hidden border-0 shadow-lg my-5">
  <div class="card-body p-0">
    <!-- Nested Row within Card Body -->
    <div class="row">
      <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
      <div class="col-lg-7">
        <div class="p-5">
          <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
          </div>
            <form class="user" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class=" row form-group">
                            <div class="col-sm-6 mb-3 mb-sm-0{{ $errors->has('f_name') ? ' has-error' : '' }}">
                                <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name" name="f_name" value="{{ old('f_name') }}" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('f_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-sm-6 {{ $errors->has('l_name') ? ' has-error' : '' }}">
                                <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Last Name" name="l_name">
                                @if ($errors->has('l_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('l_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address" value="{{ old('email') }}" name="email">
                            @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0{{ $errors->has('gender') ? ' has-error' : '' }}">
                                <select class="form-control" placeholder="select gender" name="gender">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                                @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('contact_int') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-sm-6 {{ $errors->has('contact_int') ? 'has-error' : '' }}">
                                <input type="text" class="form-control form-control-user"  placeholder="Enter Phone Number" name="contact_int">
                                @if ($errors->has('contact_int'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('contact_int') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-sm-6">
                                <input type="password" class="form-control form-control-user" id="exampleRepeatPassword password-confirm" placeholder="Repeat Password" name="password_confirmation">
                            </div>
                        </div>

                        

                        <!-- <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div> -->

                        <div class="form-group offset-md-3">
                            <div class="col-md-8 col-md-offset4">
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Register
                                </button>
                            </div>
                        </div>
                        </form>
              <hr>
              <div class="text-center">
                <a class="small" href="{{ route('password.request') }}">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="{{'login'}}">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="/mergeme/resources/vendor/jquery/jquery.min.js"></script>
  <script src="/mergeme/resources/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="/mergeme/resources/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="/mergeme/resources/js/sb-admin-2.min.js"></script>

</body>

</html>