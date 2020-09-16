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

 ?>
      <section id="main_site">
        <div class="container py-5">
          <div class="row">
            <div class="col-4 offset-4 shadow py-4">


              <div class="uploud-profile-img d-flex justify-content-center pb-5">
                <div class="text-center">
                      <img class="img rounded-circle" src="<?php echo isset($user['profileimg'])?$user['profileimg']:'assets/img1.svg';?>" width="200px" height="200px" alt="img1">



                <h4 class="py-3" >
                  <?php if(isset($user['firstname'])){
                    printf('%s %s',$user['firstname'],$user['lastname']);
                  } ?>
                </h4>
              </div>
      </div>

            <div class="user-info px-3">
              <ul class="font-ubuntu navbar-nav  ">
                <li class="nav-link"><p>FirstName :  <?php echo isset($user['firstname']) ? $user['firstname'] : "";?></p></li>
                <li class="nav-link"><p>LastName :  <?php echo isset($user['lastname']) ? $user['lastname'] : "";?></p></li>
                <li class="nav-link "><p>Email : <?php echo isset($user['email']) ? $user['email'] : "";?> </p></li>
              </ul>
          </div>
        </div>
                </div>        </div>
</section>


<?php
include 'footer.php';
  ?>
