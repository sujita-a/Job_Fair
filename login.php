//Backend Code on Php for login page


<?php
require("config.php");
session_start();
$error='';
if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "Username or Password is invalid";
        echo "Password or Username  invalid";
    }
    else
    {

        $username=$_POST['username'];
        $password=$_POST['password'];

        // $username = stripslashes($username);
        // $password = stripslashes($password);
        // $username = mysql_real_escape_string($username);
        // $password = mysql_real_escape_string($password);

        $query = mysql_query("select * from login where password='$password' AND username='$username'", $con);
        $rows = mysql_num_rows($query);
        if ($rows == 1) {
            $_SESSION['login_user']=$username;
            header("location: createjob.php");
        } else {
            echo "Username or Password Invalid";
            $error = "Username or Password is invalid";
        }
        mysql_close($con);
    }
}
?>