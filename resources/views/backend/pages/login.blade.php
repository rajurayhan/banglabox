<!DOCTYPE html>
<html lang="en">
<head>
  <title>BanglaBox Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

  <!-- Toastr --> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <style>
    @import url(https://fonts.googleapis.com/css?family=Exo:100,200,400);
    @import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);

    body{
        margin: 0;
        padding: 0;
        background: #fff;

        color: #fff;
        font-family: Arial;
        font-size: 12px;
    }

    .body{
        position: absolute;
        top: -20px;
        left: -20px;
        right: -40px;
        bottom: -40px;
        width: auto;
        height: auto;
        background-image: url({{ route('home') }}/img/login-bg.jpg);
        background-size: cover;
        -webkit-filter: blur(5px);
        z-index: 0;
    }

    .grad{
        position: absolute;
        top: -20px;
        left: -20px;
        right: -40px;
        bottom: -40px;
        width: auto;
        height: auto;
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
        z-index: 1;
        opacity: 0.7;
    }

    .header{
        position: absolute;
        top: calc(50% - 35px);
        left: calc(50% - 255px);
        z-index: 2;
    }

    .header div{
        float: left;
        color: #fff;
        font-family: 'Exo', sans-serif;
        font-size: 35px;
        font-weight: 200;
    }

    .header div span{
        color: #5379fa !important;
    }

    .login{
        position: absolute;
        top: calc(50% - 75px);
        left: calc(50% - 50px);
        height: 150px;
        width: 350px;
        padding: 10px;
        z-index: 2;
    }

    .login input[type=text]{
        width: 250px;
        height: 30px;
        background: transparent;
        border: 1px solid rgba(255,255,255,0.6);
        border-radius: 2px;
        color: #fff;
        font-family: 'Exo', sans-serif;
        font-size: 16px;
        font-weight: 400;
        padding: 4px;
    }

    .login input[type=password]{
        width: 250px;
        height: 30px;
        background: transparent;
        border: 1px solid rgba(255,255,255,0.6);
        border-radius: 2px;
        color: #fff;
        font-family: 'Exo', sans-serif;
        font-size: 16px;
        font-weight: 400;
        padding: 4px;
        margin-top: 10px;
    }

    .login input[type=button]{
        width: 260px;
        height: 35px;
        background: #fff;
        border: 1px solid #fff;
        cursor: pointer;
        border-radius: 2px;
        color: #a18d6c;
        font-family: 'Exo', sans-serif;
        font-size: 16px;
        font-weight: 400;
        padding: 6px;
        margin-top: 10px;
    }

    .login input[type=button]:hover{
        opacity: 0.8;
    }

    .login input[type=button]:active{
        opacity: 0.6;
    }

    .login input[type=text]:focus{
        outline: none;
        border: 1px solid rgba(255,255,255,0.9);
    }

    .login input[type=password]:focus{
        outline: none;
        border: 1px solid rgba(255,255,255,0.9);
    }

    .login input[type=button]:focus{
        outline: none;
    }

    ::-webkit-input-placeholder{
    color: rgba(255,255,255,0.6);
    }

    ::-moz-input-placeholder{
    color: rgba(255,255,255,0.6);
    }
  </style>
</head>
<body>

<div class="container">
    <div class="body"></div>
    <div class="grad"></div>
    <div class="header">
        <div>Bangla<span>Box</span></div>
    </div>
    <br>
    <div class="login">
        <form method="post" action="{{ route('postLogin') }}" id="loginForm">
            {{ csrf_field() }}
            <input type="text" placeholder="email" name="email" id="email"><br>
            <input type="password" placeholder="password" name="password" id="password"><br>
            <input type="button" value="Login" id="submitLogin">
        </form>
    </div>
</div>

</body>

  <!-- Toastr --> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
        $(document).ready(function() {
            var proceed = false;
            var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
            $("#submitLogin").click(function(){
                var email   = $('#email').val();
                var pass    = $('#password').val();
                if(testEmail.test(email) && pass){
                    proceed = true;
                }

                if(proceed){
                    $('#loginForm').submit();
                }
                else{
                    var text    = 'Invalid Username or Password.';
                    toastr.options = {
                        "closeButton": false,
                        "debug": false,
                        "newestOnTop": false,
                        "progressBar": false,
                        "positionClass": "toast-bottom-right",
                        "preventDuplicates": false,
                        "onclick": null,
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                        }
                    toastr.error(text, 'Error');
                }
            });
        });

        $("#password").keypress(function(e) {
            var keycode = (e.keyCode ? e.keyCode : e.which);
            if (keycode == '13') {
                $('#loginForm').submit();
            }
        });
</script>

@if(count($errors)>0)
   @foreach($errors->all() as $error)
        <script>
            var text = '{{ $error }}';
            toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-bottom-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
                }
            toastr.error(text, 'Error');
        </script>
   @endforeach
@endif

@if(session()->has('message'))
<script>
        var text    = '{{ session()->get("message") }}';
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-top-center",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
            }
        toastr.success(text, 'Success');
</script>
@endif
</html>