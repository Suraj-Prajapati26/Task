<?php

   $connection = mysqli_connect('localhost','root','','task');

   if(isset($_POST['send'])){
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Question = $_POST['questions'];
    $Message = $_POST['message'];

      $request = " insert into form(Name, Email, Question, Message) values('$Name','$Email','$Question','$Message') ";
      mysqli_query($connection, $request);

      // display success message
      echo '<script>alert("Data inserted successfully!");</script>';

      // redirect to index page after 3 seconds
      echo '<meta http-equiv="refresh" content="2;url=index.php" />';
      exit;

   }else{
      echo 'Something went wrong. Please try again.';
   }

?>
