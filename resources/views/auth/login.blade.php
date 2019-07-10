<!DOCTYPE html>
<html lang="en">
<head>
    <title>Muhahe Admin Area</title><meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('style/css/bootstrap-337.min.css')}}" />
    <link rel="stylesheet" href="{{asset('style/css/login.css')}}" />
    <link rel="stylesheet" href="{{asset('style/css/style.css')}}" />
    <link href="{{asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

</head>
<body>
<div class="container">
    <form class="form-login" method="POST" action="{{ route('login') }}">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <h2 class="form-login-heading"> Admin Login </h2>

        @if ($errors->has('email'))
            <br><span class="invalid-feedback" style="color: red;">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
        
        <input type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email Address" required autofocus>
        

        <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Your Password"  required>
        @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif

        <button type="submit" class="btn btn-lg btn-primary btn-block">Login</button>

    </form>
    
</div>

<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/matrix.login.js')}}"></script>
</body>

</html>
