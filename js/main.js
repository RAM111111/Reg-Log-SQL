$(document).ready(function(e){

  // let $uploudfile = $('#register.uploud-profile-img input[type="file"]');
  $("#uploud-profile").change(function() {
  readURL(this);
});

  $("#reg-form").submit(function(event){
    let $password = $("#password");
    let $confirm = $("#confirm-password");
    let $err = $("#confirm-err");

    if($password.val() === $confirm.val()){
      return true;
    }else{

      $err.text("Password not match");
      event.preventDefault();
      consol.console.log("Password not match");
    }
  });
});

function readURL(input) {
  if (input.files && input.files[0]) {
    let reader = new FileReader();
    reader.onload = function(e) {
      $("#register .uploud-profile-img .img").attr('src', e.target.result);
      $("#register .uploud-profile-img .camera-icon").css({display: "none"});
    }
    reader.readAsDataURL(input.files[0]);
  }
}
