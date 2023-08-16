<?php 

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['role']) ) {

    $username= $_POST['username'];
    $password= $_POST['password'];
    $role= $_POST['role'];

    if (empty($username)) {
      $em= "Username is required";
      header("Location: ../login.php?error=$em");
      exit;
    } 
    elseif (empty($password)) {
        $em= "Password is required";
        header("Location: ../login.php?error=$em");
      exit;
      } 
    elseif (empty($role)) {
        $em= "Sorry! An error occurred";
        header("Location: ../login.php?error=$em");
      exit;
      }
      else{
         echo"OKAY";
      } 
}
else{
    header("Location: ../login.php");
}


?>