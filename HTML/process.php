<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name =$_POST["inputName"];
    $phone =$_POST["phone"];
    $category =$_POST["category"];
    $Email =$_POST["Email"];
    $Message =$_POST["Message"];
$to ="dona.dey277@gmail.com";
$header = "form $Email";
  if (mail($to,$Name,$category,$Message,$header,$phone)){
    echo "email sent";

  }
  else{
    echo"email sending failed!!!";
  }
}
?>