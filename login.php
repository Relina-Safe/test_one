<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document2</title>
</head>

<body>
    <div class="login-box">
        <ul class="tabs">
            <li><a id="sign-in" href="#">Sign In</a></li>
            <li> <a id="join-us" href="#">Join Us</a> </li>
        </ul>
        <form action="sign-up.php" method="post" class="join-us-form" >
            <ul>
                <li>
                    <label for="user">Username</label><br />
                    <input class="username" name="user-up" type="text">
                </li>
                <li>
                    <label for="password">Password</label><br />
                    <input type="password" name="password-up">
                </li>
                <li>
                    <label for="password">Confirm Password</label><br />
                    <input type="password" name="password-confirm">
                </li>
                <li>
                <input type="submit" value="Sign Up" name="join_form"> 
                </li>
            </ul>
        </form>
        <form action="user.php" method="post" class="sign-up-form" >
            <ul>
                <li>
                    <label for="user">Username</label><br />
                    <input class="username" name="user" type="text">
                </li>
                <li>
                    <label for="password">Password</label><br />
                    <input type="password" name="password">
                </li>
                <li>
                    <input type="checkbox" name="check"> Keep me signed in <br />
                </li>
                <li>
                    <input type="submit" value="Sign In" name="login_form">
                    <span class="error"><?php if (isset($_GET['error'])) echo "your infomation is incorrect" ?></span>
                </li>
            </ul>

            <ul class="links">
                <li><a href="#">Forget your password</a></li>
                <li><a href="#">Create new account</a></li>
            </ul>

        </form>
    </div>
        <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="login.js"></script>
</body>
</html>

<!-- 
    
-->