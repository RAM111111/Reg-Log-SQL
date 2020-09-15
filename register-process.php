<?php
require('helper.php');

$errorr = array();

$firstname = vit($_POST["FirstName"]);
if(empty($firstname)){
  $error[] = "You forgot to enter your First Name";
}

$LastName = vit($_POST["LastName"]);
if(empty($LastName)){
  $error[] = "You forgot to enter your Last Name";
}

$email = vie($_POST["email"]);
if(empty($email)){
  $error[] = "You forgot to enter your email";
}

$password = vie($_POST["password"]);
if(empty($password)){
  $error[] = "You forgot to enter your password";
}

$confirmpassword = vie($_POST["confirm-password"]);
if(empty($confirmpassword)){
  $error[] = "You forgot to enter your confirm password";
}

$profileimg = "img";


if (empty($error)){
  // echo "Validate";
  $hashed_password = password_hash($password,PASSWORD_DEFAULT);
  require ('mysql_connect.php');
  $query = "INSERT INTO user(userid,firstname,lastname,email,password,profileimg,regesterdate)";
  $query .= "VALUES(''',?,?,?,?,?,NOW())";

  $q = mysqli_stmt_init($con);
  mysqli_stmt_prepare($q,$query);

  mysqli_stmt_bind_param($q,"sssss",$firstname,$LastName,$email,$hashed_password,$profileimg);

  mysqli_stmt_execute($q);

  if(mysqli_stmt_affected_rows($q) == 1){
    print"succefult..!";
  }else {
print"error..!";
}


}else{
  echo "not Validate";
}
