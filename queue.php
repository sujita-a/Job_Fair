<?php
require ("config.php");

$target_dir = "attachment/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

//if($_REQUEST["submit"])
//{
//    $name = ($_POST['name']);
//    $email = ($_POST['email']);
//    $mobile_no = ($_POST['mobile_no']);
//    $sql = "insert into recruiters (name, email, mobile_no, cv) values (\"" . $name . "\",\"" . $email . "\",\"" . $mobile_no . "\",\"" . $target_file . "\")";
//    $q = mysql_query($sql);
//    if ($q) {
//        echo "Data Inserted";
//    }
//}
// Check if image file is a actual image or fake image
if(isset($_POST["Submit"])) {
    $job_id = ($_POST['job_id']);
    $position = ($_POST['position']);
    $description = ($_POST['description']);


    $check = filesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "\n Path is" . $target_file . ".";
        //echo "\n File is a  - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "\n File is not a doc file or pdf file.";
        $uploadOk = 0;
    }





    echo $sql  = "insert into job_queue (job_id, position, description,attachment) values (\"".$job_id."\",\"".$position."\",\"".$description."\", \"".$target_file."\")";
    if(mysql_query($sql))
    {
        //echo "Data inserted";
        //  die(mysql_error());
        header('location:apply.php');

    }

    if ($q) {
        echo "\n Data Inserted";
    }
    else{
        echo mysql_error();
        die;
    }


}
// Check if file already exists
if (file_exists($target_file)) {
    echo "\n Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "\n Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "doc" && $imageFileType != "pdf"
    && $imageFileType != "docx" ) {
    echo "\n Sorry, only DOC, DOCX, PDF  files are only allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>


//if($_POST['Submit'])
//{
  //  $job_id = ($_POST['job_id']);
 //   $position = ($_POST['position']);
 //   $description = ($_POST['description']);

 //   echo $sql  = "insert into job_queue (job_id, position, description,) values (\"".$job_id."\",\"".$position."\",\"".$description."\")";
 //   if(mysql_query($sql))
 //   {
        //echo "Data inserted";
        //  die(mysql_error());
 //       header('location:apply.php');

   // }
//    $q = "select * from job_queue";
//    $result = mysql_query($q);
//    while($row= mysql_fetch_array($result)){
//      //  echo $row['job_id'] ." " .$row['position'] . " " . $row['description'] ." " . $row['created_by'] . ";
//    }
//    $num=mysql_numrows($result);
//    mysql_close();

//}
