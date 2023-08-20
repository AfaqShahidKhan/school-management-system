<!-- This is an extra file for the  login home page which is no longer in use -->

<?php 

session_start();
// var_dump($_SESSION);
if (isset($_SESSION['id'])&& isset($_SESSION['role'])&& isset($_SESSION['username'])) {
    



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Y School </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="logo.png">
</head>

<body class="body-home">
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="shadow w-25 p-3 text-center bg-light">

            <small>Roll:
                <b>
                    <?php 
                    if ($_SESSION['role']=='Admin') {
                       echo"Admin";
                    }elseif ($_SESSION['role']=='Teacher') {
                        echo"Teacher";
                     }else  {
                        echo"Student";
                     }
                    
                    ?>
                </b>

                <br>
                <h3 class="display-4"><?= $_SESSION['username'] ?></h3>
                <a href="logout.php" class="btn btn-warning">Logout</a>


            </small>


        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>


<?php 

}
else{
    header("Location: login.php");
      exit;
}

?>