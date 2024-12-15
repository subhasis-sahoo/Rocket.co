<?php
    include_once "navbar.php";
    ?>
    
    <!-- sign up section -->
    <section class="container_width mx-auto px-5 row">
    <div class="d-flex flex-row align-items-center justify-content-center gap-5 mt-5 py-4">
      <div class="col-4 p-4 rounded-3 shadow bg-body mx-4 d-flex flex-column">
        <h3 class="text-center mt-1">Log In</h3>
        <p class="mb-4 text-center" style="font-size: 12px;">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>

        <form action="login.php" method="post" class="mt-3">
          <div class="mb-3">
          <!-- <label for="user" class="form-label fs-5 mb-0">User</label>   -->
          <select name="user" class="form-select" aria-label="Default select example">
            <option value="Indivisula">Indivisual</option>
            <option value="Company">Company</option>
          </select>
          </div>
         
          <div class="mb-3">
            <!-- <label for="email" class="form-label fs-5 mb-0">Email</label> -->
            <input type="email" name="email" class="form-control"  placeholder="Email">
          </div>
          <div class="mb-3">
            <!-- <label for="email" class="form-label fs-5 mb-0">Email</label> -->
            <input type="password" name="password" class="form-control"  placeholder="Password">
          </div>
          
          <div class="mb-2">
            <input type="submit" name="login" value="Login" class="form-control btn btn-primary">
          </div>
        </form>
        <p class="mb-2 text-center" style="font-size: 12px;">If you aren't registered then <a href="sign_up.php" class="link text-decoration-none">Sign up</a> here</p>
      </div>
      <div class="col-5 mx-3 px-3">
        <img src="./assets/login_img.svg" alt="login_image" class="image">
      </div>
    </div>
  </section>

  <?php
    if(isset($_POST['login'])) {
      $email = $_POST['email'];
      $password = $_POST['password'];
    


      echo "$email, $password";
    }
?>