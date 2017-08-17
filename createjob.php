<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Jobs Search</title>

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


<div class="container margin-top-30 ">
    <form class="form-group" action="queue.php" method="post" enctype="multipart/form-data">
<div class="col-lg-12 margin-top-15">
    <div class="col-md-4">

    </div>
    <div class="col-md-4">
        <input name="job_id" type="text" class="form-control" placeholder="Job ID">
    </div>
    <div class="col-md-4">

    </div>
</div>
        <div class="col-lg-12 margin-top-15">
            <div class="col-md-4">
                <a href="logout.php">Logout</a>
            </div>
            <div class="col-md-4">
                <input name="position" type="text" class="form-control" placeholder="Positions">
            </div>
            <div class="col-md-4">

            </div>
        </div>
        <div class="col-lg-12 margin-top-15">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <textarea name="description" rows="5" class="form-control" placeholder="Descriptions"></textarea>

            </div>
            <div class="col-md-4">

            </div>
        </div>
        <div class="col-lg-12 margin-top-15">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <input  type="file" name="fileToUpload" id="fileToUpload" class="margin-top-15">
            </div>
            <div class="col-md-4">

            </div>
        </div>
        <div class="col-lg-12 margin-top-15">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                <input class="btn btn-primary btn-lg btn-block" type="submit" value="submit" name="Submit" >
            </div>
            <div class="col-md-4">

            </div>
        </div>
        <div class="col-lg-12 margin-top-15">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
            </div>
        </div>
    </form>
</div>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
        <script>
            function myFunction() {
                var val = document.getElementById("change");
            }
        </script>

</body>
</html>