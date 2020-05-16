<?php

  // database connection
  $con = mysqli_connect("localhost", "root", "" , "demo") or die($con);

  // post data
  if(!empty($_POST)) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $password = sha1($_POST['password']);

    // insert data into database
    $sql = "INSERT INTO users (name, email, contact, password) VALUES ('$name', '$email', '$contact','$password')";
    $insertData = mysqli_query($con,$sql);

    if($insertData){
      echo "The form has been successfully submitted.";
    } else {
      echo "Something went wrong!";
    }
  }

?>
