<?php include 'inc/header.php'; 

?>

<script>

function countChars(obj){

    var maxLength = 500;

    var strLength = obj.value.length;

    var charRemain = (maxLength - strLength);

    

    if(charRemain < 0){

        document.getElementById("charNum").innerHTML = '<span style="color: red;">You have exceeded the limit of '+maxLength+' characters</span>';

    }else{

        document.getElementById("charNum").innerHTML = charRemain+' characters remaining';

    }

}

</script> 

<h2 class="page-header">Contact Us</h2>

   <form method="post" action="contact.php"> <!-- Change -->

       <div class="form-group">

          <label >Name</label>

          <input type="text" name="contact-name" class="form-control" placeholder="John Doe" > <!-- React with other file -->

       </div>

  

       <div class="form-group">

          <label >Email</label>

          <input type="text" name="contact-email" class="form-control" placeholder="mail@example.com"> <!-- React with other file -->

       </div>



       <div class="form-group">

          <label >Title</label>

          <input type="text" name="contact-title" class="form-control" placeholder="Title"> <!-- React with other file -->

       </div>



       <div class="form-group">

          <label> Message </label>

          <textarea name="contact-message" onkeyup="countChars(this);"

          placeholder="Write Something" maxlength="500" class="form-control" id="contact-text-area"></textarea>

        </div>

        <p id="charNum">500 characters remaining</p>

       <input name="submit" type="submit" value="submit" class="btn btn-primary">

  </form>



<?php include 'inc/footer.php';?>