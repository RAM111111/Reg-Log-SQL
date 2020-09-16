<?php

function vit($textValue){
  if(!empty($textValue)){
    $trim_text = trim($textValue);
    $sanitize_str = filter_var($trim_text, FILTER_SANITIZE_STRING);
    return $sanitize_str;
  }
  return'';
}

function vie($emailValue){
  if(!empty($emailValue)){
    $trim_text = trim($emailValue);
    $sanitize_str = filter_var($trim_text, FILTER_SANITIZE_EMAIL);
    return $sanitize_str;
  }
  return'';
}


function upload_profile($path,$file){

  $targetdir = $path;
  $default = "img1.svg";
  $filename = basename($file['name']);
  $targetfilepath = $targetdir.$filename;
  $filetype = pathinfo($targetfilepath,PATHINFO_EXTENSION);


  if(!empty($filename)){
    $allowtype =  array('jpg','png','jpeg','gif','svg');
    if(in_array($filetype,$allowtype)){
      if(move_uploaded_file($file['tmp_name'],$targetfilepath)){
        return $targetfilepath;
      }
    }
  }
  return $path.$default;
}

function get_user_info($con,$userid){
  $query = "SELECT firstname,lastname,email,password,profileimg FROM user WHERE userid = ?" ;
  $q = mysqli_stmt_init($con);
  mysqli_stmt_prepare($q,$query);
  mysqli_stmt_bind_param($q,'i',$userid);
  mysqli_stmt_execute($q);

  $result = mysqli_stmt_get_result($q);
  $row = mysqli_fetch_array($result);
  // return empty($row) ? false : $row;

  if (empty($row)){
    return false;
  }else {
  return $row;
  }
  // code...
}
