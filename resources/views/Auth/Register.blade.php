<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="css/style.css">
    <title>Form đăng ký unitop.vn</title>
</head>
<body>
<div class="container">
    <div id="wrapper">
        <form method="post" action="{{ route('process_register') }}" id="form-login">
            @csrf
            <h1 class="form-heading">Form đăng ký</h1>
            <div class="form-group">
                <i class="far fa-user"></i>
                <input type="text" name="name" class="form-input" placeholder="Họ &amp; Tên">
            </div>
            <div class="form-group">
                <i class="far fa-envelope"></i>
                <input type="email" name="email" class="form-input" placeholder="E-mail">
            </div>
            <div class="form-group">
                <i class="fas fa-phone-alt"></i>
                <input type="tel" name="phone" class="form-input" placeholder="Điện Thoại">
            </div>
            <div class="form-group">
                <i class="fas fa-map-marker-alt"></i>
                <input type="text" name="address" class="form-input" placeholder="Địa Chỉ">
            </div>
            <div class="form-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" class="form-input" placeholder="Mật khẩu">
                <div id="eye">
                    <i class="far fa-eye"></i>
                </div>
            </div>
            <button class="form-submit">Register</button>
            <a href="{{ route('login') }}" class="form-submit">Login</a>
        </form>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/app.js"></script>
<script>
    $(document).ready(function(){
        $('#eye').click(function(){
            $(this).toggleClass('open');
            $(this).children('i').toggleClass('fa-eye-slash fa-eye');
            if($(this).hasClass('open')){
                $(this).prev().attr('type', 'text');
            }else{
                $(this).prev().attr('type', 'password');
            }
        });
    });
</script>
</body>
</html>
