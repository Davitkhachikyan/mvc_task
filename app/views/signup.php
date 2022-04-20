<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="/app/views/css/home.css">
</head>

<body>
<div>
    <div class="header-dark">
        <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
            <div class="container"><a class="navbar-brand" href="#">Evistep</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse"
                     id="navcol-1">
                    <ul class="nav navbar-nav">
                        <!--                        <li class="nav-item" role="presentation"><a class="nav-link" href="#">Link</a></li>-->
                        <!--                        <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Dropdown </a>-->
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
                        </li>
                    </ul>
                    <form class="form-inline mr-auto" target="_self">
                        <div class="form-group"><label for="search-field"><i class="fa fa-search"></i></label><input class="form-control search-field" type="search" name="search" id="search-field"></div>
                    </form><span class="navbar-text"><a href="login" class="login">Log In</a></span><a class="btn btn-light action-button" role="button" href="signup">Sign Up</a></div>
            </div>
        </nav>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
<form method="post" action="../auth/signup">
    <input type="text" name="username" placeholder="username">username<br><br>
    <input type="text" name="surname" placeholder="surname">surname<br><br>
    <input type="text" name="email" placeholder="email">email<br><br>
    <input type="password" name="password" placeholder="password">password<br><br>
    <input type="text" name="age" placeholder="age">age<br><br>
    <button type="submit">Sign up</button><br><br>
</form>
</body>

</html>











<!---->
<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <title>Signup</title>-->
<!--</head>-->
<!--<body>-->
<!--    <form method="post">-->
<!--        <input type="text" name="username" placeholder="username">username<br><br>-->
<!--        <input type="text" name="surname" placeholder="surname">surname<br><br>-->
<!--        <input type="text" name="email" placeholder="email">email<br><br>-->
<!--        <input type="password" name="password" placeholder="password">password<br><br>-->
<!--        <input type="text" name="age" placeholder="age">age<br><br>-->
<!--        <button type="submit">Sign up</button><br><br>-->
<!--    </form>-->
<!---->
<!---->
<!--</body>-->
<!--</html>-->