//Home Login Page



<?php
include('login.php');

if(isset($_SESSION['login_user'])){
    header("location: createjob.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">


    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Job Portal</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">

                <li><a href="home.php">Home</a></li>
                <li><a href="Apply.php">Apply</a></li>
                <li><a href="index.php">Add Job</a></li>
                <li><a id="change" onclick="myFunction()" href="index.php">Login</a></li>
            </ul>
            <form class="navbar-form navbar-right">
                <input type="text" class="form-control" placeholder="Search...">
            </form>
        </div>
    </div>
</nav>

<form name="login" action="" method="post">
    <div class="container ">
        <div class="margin-top-30">
            <div>
                <fieldset>


                    <div class=" margin-top-30">
                        <div class=" form-group margin-top-15">
                            <div class="col-md-12">
                                <div class="col-lg-4">

                                </div>

                                <div class="col-lg-4">
                                    <span><label for="username">Username</label></span>
                                    <input name="username" type="text" class="form-control" placeholder="Username">
                                </div>

                                <div class="col-lg-4">

                                </div>

                            </div>
                        </div>
                        <div class="form-group margin-top-15">
                            <div class="col-md-12 margin-top-15">
                                <div class="col-lg-4">

                                </div>

                                <div class="col-lg-4">
                                    <span><label for="password">Password</label></span>
                                    <input name="password" type="password" class="form-control" placeholder="Password">
                                </div>

                                <div class="col-lg-4">

                                </div>

                            </div>
                        </div>


                        <div class="form-group margin-top-15">
                            <div class="col-md-12 margin-top-15">
                                <div class="col-lg-4">

                                </div>

                                <div class="col-lg-4">
                                    <button name="submit" type="submit" class="btn btn-lg btn-primary btn-block"value="login">Sign In</button>
                                </div>

                                <div class="col-lg-4">

                                </div>

                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
</form>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>


