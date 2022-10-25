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
                        Create Account
                    </h2>
                    <form class="login-form" action="../controller/register.php" method="POST">
                        <input type="text" class="auth-form-input" placeholder="UserName" name="username" required>
                        <div class="input-icon">
                            <input type="password" class="auth-form-input" placeholder="Password" name="password" required>
                            <i class="fa fa-eye show-password"></i>
                        </div>
                        <input type="password" class="auth-form-input" placeholder="Confirm Password">
                        <input type="email" class="auth-form-input" placeholder="Email" name="email" required>
                        <input type="name" class="auth-form-input" placeholder="Name" name="name" required>
                        <label class="btn active">
                            <input type="checkbox" name='email1' checked>
                            <i class="fa fa-square-o"></i><i class="fa fa-check-square-o"></i>
                            <span> I agree to the <a href="#">Terms</a> and <a href="#">Privacy Policy</a>.</span>
                        </label>
                        <div class="footer-action">
                            <input type="submit" value="Sign Up" class="auth-submit" name="signup">
                            <a href="login.php" class="auth-btn-direct">Sign In</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>