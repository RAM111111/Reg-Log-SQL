<?php
require('helper.php');

$error = array();

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

$files = $_FILES["profiluploud"];//($_FILES) is a super global variable which can be used to upload files.

$profileimg = upload_profile("assets/",$files);


if (empty($error)){
  // echo "Validate";
  $hashed_password = password_hash($password,PASSWORD_DEFAULT);
  require ('mysql_connect.php');
  $query = "INSERT INTO user(userid,firstname,lastname,email,password,profileimg,regesterdate)";
  $query .= 'VALUES("0",?,?,?,?,?,NOW())';
  $q = mysqli_stmt_init($con); //function initializes a statement and returns an object

  mysqli_stmt_prepare($q,$query);//function prepares an SQL statement for execution, you can use parameter markers ("?") in this query, specify values for them, and execute it later.

  mysqli_stmt_bind_param($q,'sssss',$firstname,$LastName,$email,$hashed_password,$profileimg);//unction is used to bind variables to the parameter markers of a prepared statement.

  mysqli_stmt_execute($q);//function accepts a prepared statement object (created using the prepare() function) as a parameter, and executes it.

  if(mysqli_stmt_affected_rows($q) == 1){//function returns the number of rows affected (changed, deleted, inserted) by the recently executed statement.
    session_start();
    $_SESSION['userid'] = mysqli_insert_id($con);
    header('location:login.php');
    exit();

    print"succefult..!";
  }else {
print"error..!";
}


}else{
  echo "not Validate";
}
