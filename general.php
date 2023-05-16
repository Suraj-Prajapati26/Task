<?php
// echo "hello";
   $connection = mysqli_connect('localhost','root','','task');

   if(isset($_POST['insert'])){
      echo 'hellp';
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Question = $_POST['questions'];

      $request = " insert into general(Name, Email, Question) values('$Name','$Email','$Question') ";
      mysqli_query($connection, $request);

      echo '<script>alert("Data inserted successfully!");</script>';

      // redirect to index page after 3 seconds
      echo '<meta http-equiv="refresh" content="2;url=index.php" />';
      exit;

   }else{
      echo 'something went wrong please try again!';
   }

?>