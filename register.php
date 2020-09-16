
<?php include 'header.php'; ?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  require 'register-process.php';
}
 ?>

      <section id="register">
        <div class="row m-0">
          <div class="col-lg-4 offset-lg-2">
            <div class="text-center pb-5">
              <h1 class="login-title text-dark">Rigester</h1>
              <p class="p-1 m-0 font-ubuntu text-black-50">Rigester and enjoy additional feature ,</p>
              <span class="font-ubuntu text-black-50">I already have <a href="login.php">login</a></span>
            </div>
            <div class="uploud-profile-img d-flex justify-content-center pb-5">
              <div class="text-center">
                <div class="d-flex justify-content-center">
                  <i class="fas fa-camera camera-icon fa"></i>

                </div>
                <img class="img rounded-circle" src="assets/img1.svg" width="200px" height="200px" alt="img1">
                <small class="form-text text-black-50">Choose image</small>
                <input type="file" form="reg-form" name="profiluploud" class="form-control-file" id="uploud-profile">
              </div>


            </div>
            <div class="d-flex justify-content-center">
              <form id="reg-form" action="register.php" method="post" enctype="multipart/form-data">
                <div class="form-row">
                  <div class="col">
                    <input type="text" value="<?php if(isset($_POST['FirstName'])) echo $_POST['FirstName'];?>" name="FirstName" placeholder="FirstName" class="form-control"id="FirstName">
                  </div>
                  <div class="col">
                    <input type="text" value="<?php if(isset($_POST['LastName'])) echo $_POST['LastName'];?>" name="LastName" placeholder="LastName" class="form-control"id="LastName">
                  </div>
                </div>
                <div class="form-row my-4">
                  <div class="col">
                    <input type="email" value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>"  name="email" required placeholder="Email" class="form-control"id="email">
                </div>
                </div>

                <div class="form-row my-4">
                  <div class="col">
                    <input type="password" name="password" required placeholder="Password" class="form-control"id="password">
                </div>
                </div>

                <div class="form-row my-4">
                  <div class="col">
                    <input type="password" name="confirm-password" required placeholder="Confirm password" class="form-control"id="confirm-password">
                    <small id="confirm-err" class="text-danger"></small>

                </div>
                </div>

                <div class="form-check form-check-inline">
                  <input type="checkbox" name="aggrement" class="form-check-input" required>
                  <label for="aggrement" class="form-check-label font-ubuntu text-black-50"> I agree <a href="#">terms,conditions and policy.</a>(˚)</label>
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
