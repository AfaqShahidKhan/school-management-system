<?php 

session_start();
// var_dump($_SESSION);
if (isset($_SESSION['admin_id'])&& isset($_SESSION['role'])&& isset($_SESSION['username'])) {
    if ($_SESSION['role']=='Admin') {
    
    



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Y School </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../logo.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <?php 
   include"inc/navbar.php";
   ?>
    <div class="container mt-5">
        <div class="container text-center">
            <div class="row row-cols-5">
                <a href="" class="col btn btn-dark m-3 py-3"><i class="fa fa-user-plus fs-1"
                        aria-hidden="true"></i><br>Teachers</a>
                <a href="" class="col btn btn-dark m-3 py-3"><i class="fa fa-graduation-cap fs-1"
                        aria-hidden="true"></i> </i><br>
                    Students</a>
                <a href="" class="col btn btn-dark m-3 py-3"><i class="fa fa-pencil fs-1" aria-hidden="true"></i><br>
                    Registrar Office</a>
                <a href="" class="col btn btn-dark m-3 py-3"><i class="fa fa-cubes fs-1" aria-hidden="true"></i><br>
                    Class</a><a href="" class="col btn btn-dark m-3 py-3"><i class="fa fa-columns fs-1"
                        aria-hidden="true"></i><br>
                    Section</a>
                <a href="" class="col btn btn-dark m-3 py-3"><i class="fa fa-calendar fs-1" aria-hidden="true"></i><br>
                    Schedule</a>
                <a href="" class="col btn btn-dark m-3 py-3"><i class="fa fa-book fs-1" aria-hidden="true"></i><br>
                    Course</a>
                <a href="" class="col btn btn-dark m-3 py-3"><i class="fa fa-envelope fs-1" aria-hidden="true"></i><br>
                    Message</a>
                <a href="" class="col btn btn-primary m-4 py-3 col-5"><i class="fa fa-cogs fs-1"
                        aria-hidden="true"></i><br>
                    Settings</a>
                <a href="" class="col btn btn-warning m-4 py-3 col-5"><i class="fa fa-sign-out fs-1"
                        aria-hidden="true"></i><br>
                    Logout</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script>
    $(document).ready(function() {
        $("#navLinks li:nth-child(1) a").addClass('active');
    });
    </script>

</body>

</html>


<?php }
else{
    header("Location: ../login.php");
      exit;
}

}
else{
    header("Location: ../login.php");
      exit;
}

?>