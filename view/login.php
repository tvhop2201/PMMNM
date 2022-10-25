<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./asset/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" />
</head>

<body>
    <div class="auth-wrapper">
        <div class="auth-container">
            <div class="auth-action-left">
                <div class="auth-form-outer">
                    <h2 class="auth-form-title">
                        Sign In
                    </h2>
                    <form class="login-form" action="../controller/login.php" method="POST">
                        <input type="username" class="auth-form-input" placeholder="UserName" name="username">
                        <div class="input-icon">
                            <input type="password" class="auth-form-input" name="password" placeholder="Password">
                            <i class="fa fa-eye show-password"></i>
                        </div>
                        <label class="btn active">
                            <input type="checkbox" name='email1' checked>
                            <i class="fa fa-square-o"></i><i class="fa fa-check-square-o"></i>
                            <span>Remember password.</span>
                        </label>
                        <div class="footer-action">
                            <input type="submit" value="Sign In" class="auth-submit" name="signin">
                            <a href="register.php" class="auth-btn-direct">Sign Up</a>
                        </div>
                    </form>
                    <div class="auth-forgot-password">
                        <a href="#">Forfot Password</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>