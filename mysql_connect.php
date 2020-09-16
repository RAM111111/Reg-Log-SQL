<?php
define('DB_NAME','register_db');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_HOST','localhost');




try {
  $con = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
  mysqli_set_charset($con,'utf8');

}catch(Exception $ex) {
  print"An Exception occured .Messege: ".$ex->getMessage();
}catch(error $e){
  print"System busy try again later.";
}




if (!$con) {
  print("Connection failed: " . mysqli_connect_error());
}
