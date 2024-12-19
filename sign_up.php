<?php
    include_once "navbar.php";
?>
    
  <!-- sign up section -->
<section class="container_width mx-auto px-12 row">
    <div class="d-flex flex-row align-items-center justify-content-center gap-5 mt-5 py-4">
      <!-- Sign up form -->
      <div class="col-4 p-4 rounded-3 shadow bg-body mx-4 d-flex flex-column">
        <h3 class="text-center mt-1">Sign Up</h3>
        <p class="mb-4 text-center" style="font-size: .75rem;">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
        <p class=" mb-2 text-center error" style="font-size: .75rem; color: red;" id="email_exists_error"></p>

        <form action="sign_up_validation.php" method="post" class="mt-3" id="form">
          <div class="mb-3">
            <select name="user" id="user" class="form-select" aria-label="Default select example">
              <option value="jobseeker">Jobseeker</option>
              <option value="recruiter">Recruiter</option>
            </select>
          </div>

          <div class="mb-3">
            <input type="text" name="username" id="username" class="form-control" placeholder="Username" autocomplete="off" required>
            <p style="font-size: .75rem; color: red;" class="error ps-1 my-2" id="username_error"></p>
          </div>

          <div class="mb-3">
            <input type="email" name="email" id="email" class="form-control"  placeholder="Email" autocomplete="off" required>
            <p style="font-size: .75rem; color: red;" class="error ps-1 my-2" id="email_error"></p>
          </div>

          <div class="mb-3">
            <input type="password" name="password" id="password" class="form-control"  placeholder="Password" autocomplete="off" required>
            <p style="font-size: .75rem; color: red;" class="error ps-1 my-2" id="password_error"></p>
          </div>

          <div class="mb-4">
            <input type="password" name="c_password" id="c_password" class="form-control"  placeholder="Confirm Password" autocomplete="off" required>
            <p style="font-size: .75rem; color: red;" class="error ps-1 my-2" id="c_password_error"></p>
          </div>

          <div class="mb-2">
            <input type="submit" name="sign_up" value="Sign Up" class="form-control btn btn-primary">
          </div>
        </form>
        <p class="mb-2 text-center" style="font-size: 12px;">If you are already registered then <a href="log_in.php" class="link text-decoration-none">Log In</a> here</p>
      </div>

      <!-- Sign up page image -->
      <div class="col-5 mx-3 px-3">
        <img src="./assets/sing_up_img.svg" alt="sign_in_image" class="image">
      </div>
    </div>
</section>



  <script>
    $('#form').submit((e) => { //Accessing form data using JQuery and perform submit operation
      e.preventDefault();

      // Accessing all input fields using JQuery
      let emailExistsError = $('#email_exists_error');
      let user = $('#user').val();
      let username = $('#username').val().trim();
      let email = $('#email').val();
      let password = $('#password').val();
      let cPassword = $('#c_password').val();

      // Accessing all error fields using JQuery
      let usernameError = $('#username_error');
      let emailError = $('#email_error');
      let passwordError = $('#password_error');
      let cPasswordError = $('#c_password_error');
      console.log("client: ", user, username, email, password, cPassword);


      // regex for usernmae, email and password.
      const usernameRegex = /^[A-Za-z ]{3,20}$/; // It accepts all upper case latters, lower case latters and space.
      const emailRegex = /^[A-Za-z0-9]+(?:[.%_+][A-Za-z0-9]+)*@[A-Za-z0-9]+\.[A-Za-z]{2,}$/; // It accepts all valid email format.
      const passwordRegex = /^(?=.*[A-Z])(?=.*[a-z])(?=.*[\d])(?=.*[\W_]).{8,}$/; // Password regex accepts all upper case latters, lower case latter, numbers and special characters atleast once and it's lenght must be greater than 8.

      let isFormDataValid = true; // To check all the inputs valid or not.

      // Username validation using usernameRegex.
      if(!usernameRegex.test(username)) {
        usernameError.text("Enter a valid user name.");
        isFormDataValid = false;
      } else {
        usernameError.text("");
      }

      // Email validation using emailRegex.
      if(!emailRegex.test(email)) {
        emailError.text("Enter a valid email.");
        isFormDataValid = false;
      } else {
        emailError.text("");
      }

      // Password validation using passwordRegex
      if(!passwordRegex.test(password)) {
        passwordError.text("Password length must be greater than 8 and must contain atleast 1 uppercase latter, 1 lowercase latter, 1 special character and 1 number.");
        isFormDataValid = false;
      } else {
        passwordError.text("");
      }

      // Confirm password validation by compairing cPassword and password.
      if(cPassword !== password) {
        cPasswordError.text("Password and confirm password must be same.");
        isFormDataValid = false;
      } else {
        cPasswordError.text("");
      }


      // let data1 = {};
      if(isFormDataValid) {
        // data1 = {user:user, username:username, email:email, password:password, cPassword:cPassword};
        // console.log(data1);

        // Resetting the input field to it's initial value.
        $('#user').prop('selectedIndex',0);
        $('#username').val('');
        $('#email').val('');
        $('#password').val('');
        $('#c_password').val('');

        // Sending sign up form data to php using ajax.
        $.ajax({
          url: "sign_up_validation.php",
          method: 'POST',
          data: {user:user, username:username, email:email, password:password, cPassword:cPassword},
          success: function(data){
              data = JSON.parse(data);
              console.log(data);
              
              if(data.isExists == "yes"){
                emailExistsError.text("Email is already exists.");
              } else {
                emailExistsError.text("");
                if(data.user == 'recruiter') { // if user is recruiter or jobseeker 
                  window.location = "recruiter_profile.php";
                } else {
                  window.location = "jobseeker_profile.php";
                }
              }
          }
        })

      }

    });
  </script>

  