<?php 
  include_once 'config/init.php'

?>
<?php
$job = new Job;
$template= new Template('templates/job-welcome.php');
echo $template;
?>
