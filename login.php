
<?php

session_start();
 include 'header.php';
 include 'helper.php'; ?>

<?php
require ('mysql_connect.php');
?>

<?php
$user = array();
if(isset($_SESSION['userid'])){
  $user = get_user_info($con,$_SESSION['userid']);
}
  if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    require 'login-process.php';


}
 ?>
      <section id="login_id">
        <div class="row m-0">
          <div class="col-lg-4 offset-lg-2">
            <div class="text-center pb-5">
              <h1 class="login-title text-dark">Login</h1>
              <p class="p-1 m-0 font-ubuntu text-black-50">Login and enjoy,</p>
              <span class="font-ubuntu text-black-50">create a new<a href="register.php">account</a></span>
            </div>
            <div class="uploud-profile-img d-flex justify-content-center pb-5">
              <div class="text-center">
                    <img class="img rounded-circle" src="<?php echo isset($user['profileimg'])?$user['profileimg']:'assets/img1.svg';?>" width="200px" height="200px" alt="img1">
                    </div>
            </div>
            <div class="d-flex justify-content-center">
              <form id="log-form" action="login.php" method="post" enctype="multipart/form-data">

                <div class="form-row my-4">
                  <div class="col">
                    <input type="email" name="email" required placeholder="Email" class="form-control"id="email">
                </div>
                </div>

                <div class="form-row my-4">
                  <div class="col">
                    <input type="password" name="password" required placeholder="Password" class="form-control"id="password">
                </div>
                </div>


                <div class="submit-btn text-center my-5">
                  <button type="submit" class="btn btn-warning rounded-pill text-dark px-5">Continue</button>
                </div>

              </form>
            </div>
          </div>
        </div>


      </section>

<?php
include 'footer.php';
  ?>
