<?php


$error = array();

$email = vie($_POST["email"]);
if(empty($email)){
  $error[] = "You forgot to enter your email";
}

$password = vie($_POST["password"]);
if(empty($password)){
  $error[] = "You forgot to enter your password";
}

if(empty($error)){
  $query = "SELECT userid,firstname,lastname,email,password,profileimg FROM user WHERE email=?" ;
  $q = mysqli_stmt_init($con);
  mysqli_stmt_prepare($q,$query);
  mysqli_stmt_bind_param($q,'s',$email);
  mysqli_stmt_execute($q);
  $result = mysqli_stmt_get_result($q);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  if(!empty($row)){
    if(password_verify($password,$row['password']))
    header("location:index.php");
    exit();
  }else{
    print('You have not account please register..');
  }

}else {
  echo('please fill out email and password !');
}
