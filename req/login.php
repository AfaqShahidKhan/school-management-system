<?php 

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['role']) ) 
{
 include"../DB_connection.php";
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
         if ($role=='1') {
          $sql="SELECT * from admin WHERE username=?";
          $role="Admin";
         }elseif ($role=='2') {
          $sql="SELECT * from teacher WHERE username=?";
          $role="Teacher";
         }
         else{
          $sql="SELECT * from student WHERE username=?";
          $role="Student";
         }
         $stm= $conn->prepare($sql);
         $stm->execute([$username]);

         if ($stm->rowCount()==1) {
          $user= $stm->fetch();
          // $username= $user['username'];
         }
         else{
          $em= "Incorrect username or password";
        header("Location: ../login.php?error=$em");
      exit;
         }
       }
}
else{
    header("Location: ../login.php");
}


?>