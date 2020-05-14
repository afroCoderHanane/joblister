<?php
include_once 'config/init.php';
$_SESSION['username'] = '';

?>

<?php

if(isset($_POST['submit-button']))
{
//    echo '<script> alert("sign Up button clicked")</script>';
     $firstname = $_POST['firstname'];
     $lastname = $_POST['lastname'];
     $username = $_POST['username'];
     $password= $_POST['password'];
     $cpassword= $_POST['cpassword'];
     $hashedpsw=password_hash($password,PASSWORD_DEFAULT);
     $role = 0;  //0 for member, 1 for admin

     $database = new Database;
     $query= "SELECT password from logintb WHERE username='$username'";

     $query_run= $database->getConnection($query);

        if($password==$cpassword)
        {
            $query_run= $database->getConnection($query);

            if(mysqli_num_rows($query_run)>0)
            {
                echo '<script type = "text/javascript"> alert("User already exist: try another username")</script>'; 
             }
            else
            {
            $query= "insert into logintb (username,password,firstname,lastname,role) values('$username','$hashedpsw','$firstname','$lastname','$role')";
            $query_run = $database->getConnection($query);
            
             if($query_run)
             {
               echo"<script> 
               alert('Registration successful: You will be redirected to a new page in 5 seconds or Return to login Page');
               function Redirect(){

               window.location.href='login.php';
               }
               
               setTimeout('Redirect()', 5000);
               </script>";   
            }
             else
             {
                echo '<script type = "text/javascript"> alert("Error 404: Registration failed")</script>';
             }
         }
      }
      else
      {
        echo '<script type = "text/javascript"> alert("Password did not match")</script>';
      }
    }
?>

<?php
$template= new Template('templates/job-register.php');
echo $template;

?>
