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
