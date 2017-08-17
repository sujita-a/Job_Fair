//Frontend Code for Apply Job




<?php
require('config.php');
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
<body >
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
                <li><a href="index.php">Login</a></li>
            </ul>
            <form class="navbar-form navbar-right">
                <input type="text" class="form-control" placeholder="Search...">
            </form>
        </div>
    </div>
</nav>



<div class="container margin-top-30">


    <div id="tab" class="table-responsive">
        <table class="table table-hover text-left">
            <caption class="table-caption text-center"><b>JOB QUEUE</b></caption>
            <thead>
            <tr >
                <th>S.No</th>
                <th>Positions</th>
                <th>Descriptions</th>
                <th>Interested Then</th>
            </tr>
            </thead>
            <?php

            $q = "select * from job_queue";
            $result = mysql_query($q);
            while($row= mysql_fetch_array($result)){
                //echo $row['job_id'] ." " .$row['position'] . " " . $row['description'] ." " . $row['created_by'] . "<br>";
                ?>
                <tr>
                    <td><?php echo $row['job_id']; ?></td>
                    <td><?php echo $row['position']; ?></td>
                    <td><?php echo  $row['description']; ?> </td>

                    <td><button type="button" class="btn btn-default" data-toggle="modal" data-target="#modaljob" data-whatever="<?php echo $row['job_id']; ?>">Apply</button></td>
                </tr>
            <?php
            }
            $num=mysql_numrows($result);
            mysql_close();
            ?>

        </table>
    </div>


</div>




<div class="modal fade" id="modaljob" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title" id="myModalLabel">Apply By Filling Your Details</h3>
            </div>
            <div class="modal-body margin-top-15">
                <div id="upload">
                    <form class="form-group" action="upload.php" method="post" enctype="multipart/form-data">
                        <div align="center">
                            <div class="form-group">

                                <input name="job_id" type="text" value="<?php echo $row['job_id']; ?>" class="form-control" id="job-id">
                            </div>
                            <div class="form-group">
                                <input name="name" type="text" class="form-control" placeholder="NAME">
                            </div>
                            <div class="form-group">
                                <input name="email" type="text" class="form-control" placeholder="Email ID">
                            </div>
                            <div class="form-group">
                                <input name="mobile_no" type="text" class="form-control" placeholder="Mobile Number">
                            </div>
                            <div class="form-group">
                                <input  type="file" name="fileToUpload" id="fileToUpload" class="margin-top-15">
                            </div>
                            <div class="col-lg-12 form-group">
                                <div class="col-md-4">
                                </div>
                                <div class="col-md-4 ">
                                    <input class="btn btn-primary btn-lg btn-block" type="submit" value="Submit" name="Submit" class="margin-top-15">
                                </div>
                                <div class="col-md-4">
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>




<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

<script>
    $('#modaljob').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var jobid = button.data('whatever') // Extract info from data-* attributes
// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        //modal.find('.modal-title').text('You are applying for job with id ' + jobid)
        modal.find('#job-id').val(jobid)
    })


</script>

</body>
</html>