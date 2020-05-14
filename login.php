<?php
include_once 'config/init.php';
?>

<?php
if(isset($_POST['login']))
{
  $username=$_POST['username'];
  $password=$_POST['password'];

  $database = new Database;
  $query= "SELECT password from logintb WHERE username='$username'";

  $query_run= $database->getConnection($query);
  
  if(mysqli_num_rows($query_run)>0)
  {
    //valid
    $row = mysqli_fetch_array($query_run);
    $password_hash = $row['password'];

    if(password_verify($password, $password_hash))
     { 
      //Add session
      $query= "SELECT role from logintb WHERE username='$username'";
      $query_run= $database->getConnection($query);
      $row = mysqli_fetch_array($query_run);
      $_SESSION['username']= $username;
      $_SESSION['role'] = $row['role'];
       echo "<script> alert('Password Matched - Logging In'); window.location.href='homepage.php';</script>";
     }
     else
     {
       echo "<script> alert('Incorrect Password - Logging Failed'); window.location.href='';</script>";
     }
  }
  else
  {
    echo "<script> alert('User does not exist'); window.location.href='';</script>";
  }

}


?> 
<?php
$template= new Template('templates/job-login.php');
echo $template;

?>