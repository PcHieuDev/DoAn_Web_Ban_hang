<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vjp/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-heading {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .form-group {
            position: relative;
            margin-bottom: 20px;
        }

        .form-input {
            width: 100%;
            padding: 10px 0px 10px 30px;
            border: none;
            border-radius: 5px;
            background-color: #f2f2f2;
            font-size: 16px;
        }

        .form-input:focus {
            outline: none;
        }

        .form-group i {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            left: 10px;
            color: #888;
        }

        .form-submit {
            display: block;
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #337ab7;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        .form-submit:hover {
            background-color: #286090;
        }

        #eye {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            right: 10px;
            color: #888;
            cursor: pointer;
        }

        .open i.fa-eye-slash {
            display: none;
        }
    </style>
    <title>Admin</title>
</head>
<body>
<div class="container">
    <div id="wrapper">
        <form method="post" action="{{ route('process_loginadmin') }}" id="form-login">
            @csrf
            <h1 class="form-heading">Admin</h1>
            <div class="form-group">
                <i class="far fa-envelope"></i>
                <input type="email" name="email" class="form-input" placeholder="Email">
            </div>
            <div class="form-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" class="form-input" placeholder="Mật khẩu">
                <div id="eye">
                    <i class="far fa-eye"></i>
                </div>
            </div>
            <button type="submit" class="form-submit">Login</button>
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
