<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Y School </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="logo.png">
</head>

<body class="body-home">

    <div class="black-fill">

        <br><br>


        <div class="d-flex justify-content-center align-items-center flex-column">
            <form class="login" method="post" action="req/login.php">
                <div class="text-center">
                    <img src="logo.png" width="100">
                </div>
                <h3>Login</h3>
                <?php 
                if (isset($_GET['error'])) {?>


                <div class="alert alert-danger" role="alert">
                    <?= $_GET['error']
                
                ?>
                </div>

                <?php }?>
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" name="username">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>

                <div class="mb-3">
                    <label class="form-label">Login As</label>
                    <select class="form-control" name="role">
                        <option value="1">Admin</option>
                        <option value="2">Student</option>
                        <option value="3">Teacher</option>


                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Login</button>
                <a href="index.php" class="text-decoration-none fw-bolder ">Back to Home</a>
            </form>


            <br>
            <br>

            <div class="text-center text-light">Copyrights &copy; Y School. All rights reserved</div>


        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>