<?php
include_once "navbar.php";
?>

<!-- login section -->
<section class="container_width mx-auto px-5 row">
  <div class="d-flex flex-row align-items-center justify-content-center gap-5 mt-4 py-4">
    <div class="col-4 p-4 rounded-3 shadow bg-body mx-4 d-flex flex-column">
      <h3 class="text-center mt-1">Log In</h3>
      <p class="mb-4 text-center" style="font-size: 12px;">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>

      <form action="log_in_validation.php" method="post" class="mt-3" id="form">
        <div class="mb-3">
          <!-- Error message for invalid email and password  -->
          <p style="font-size: .75rem; color: red;" class="error ps-1 my-2" id="error_message">
            <!-- id="error_message checks if the error_message query parameter is set or not" -->
            <!-- if set it return a error message -->

          </p>
          <!-- <label for="user" class="form-label fs-5 mb-0">User</label>   -->
          <select name="user" id="user" class="form-select" aria-label="Default select example">
            <option value="jobseeker">Jobseeker</option>
            <option value="recruiter">Recruiter</option>
          </select>
        </div>

        <div class="mb-3">
          <!-- <label for="email" class="form-label fs-5 mb-0">Email</label> -->
          <input type="email" name="email" class="form-control" placeholder="Email" id="email">
        </div>
        <div class="mb-3">
          <!-- <label for="email" class="form-label fs-5 mb-0">Email</label> -->
          <input type="password" name="password" class="form-control" placeholder="Password" id="password">
        </div>

        <div class="mb-2">
          <input type="submit" name="login" value="Login" class="form-control btn btn-primary">
        </div>
      </form>
      <p class="mb-2 text-center" style="font-size: 12px;">If you aren't registered then <a href="sign_up.php"
          class="link text-decoration-none">Sign up</a> here</p>
    </div>
    <div class="col-5 mx-3 px-3">
      <img src="./assets/login_img.svg" alt="login_image" class="image">
    </div>
  </div>
</section>


<script>
  $('#form').submit((e) => {
    e.preventDefault();

    let email = $('#email').val();
    let password = $('#password').val();
    let user = $('#user').val();

    let error_message = $('#error_meaasge');

    console.log(email, password, user);
    $.ajax({
      url: "log_in_validation.php",
      method: 'POST',
      data: { email: email, password: password, user: user },
      success: function(data) {
        console.log(email);
        data = JSON.parse(data);
        console.log(data);

        if (data.isExits == "yes") {
          if (data.user == "jobseeker") {
            window.location = "jobseeker_home.php";
          }
          else if (data.user == "recruiter") {
            window.location = "recruiter_home.php";
          }
        } else {
          data_exists_error.text("Email or password is Invalid");
        }
      }
    })
  });
</script>
 