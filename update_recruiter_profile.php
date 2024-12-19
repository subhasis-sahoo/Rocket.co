<?php
  include_once "navbar.php";

  require_once "functions.php";
  $email = $_SESSION['email'];
  $result = getRecruiterDataByEmail($email);
  $data = $result->fetch_assoc();
  // print_r($data->fetch_assoc());
?>


<section class="container_width mx-auto px-12 row">
  <div class="d-flex flex-row align-items-center justify-content-center gap-5 mt-5 py-4">
    <div class="col-4 p-4 rounded-3 shadow bg-body mx-4 d-flex flex-column">
      <h3 class="text-center mt-1">Profile page</h3>
      <p class="mb-4 text-center" style="font-size: .75rem;">Complete your profile now to join our community.</p>
      <p class=" mb-2 text-center error" style="font-size: .75rem; color: red;" id="email_exists_error"></p>

      <form action="update_recruiter_data.php" method="post" id="form" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="image" class="form-label">Upload Image</label>
            <input type="file" name="image" class="form-control" id="image" accept="image/*" value="<?php echo $data['image']?>" required>
            <p class="my-2" style="font-size: .75rem; color: red;" id="image_error"></p>
          </div>

          <div class="mb-3">
            <label for="" class="form-label">Name </label>
            <input type="text" class="form-control" name="name" id="username" value="<?php echo $data['name']?>" autocomplete="off" required>
            <p class="my-2" style="font-size: .75rem; color: red;" class="error ps-1 my-2" id="username_error"></p>
          </div>

          <div class="mb-3">
            <label for="" class="form-label">Gender </label>
            <input type="radio" name="gender" value="male" id="male" class="form-check-input mt-0" <?php $data['gender'] == 'male'? print "checked": ""?> required >male
            <input type="radio" name="gender" value="female" id="female" class="form-check-input mt-0" <?php $data['gender'] == 'female'? print "checked": ""?> required >Female
            <input type="radio" name="gender" value="other" id="other" class="form-check-input mt-0" <?php $data['gender'] == 'other'? print "checked": ""?> required >other
          </div>

          <div class="mb-3">
            <label for="" class="form-label">Dob </label>
            <input type="date" name="dob" id="dob" class="form-control" id="dob" value="<?php echo $data['dob']?>" autocomplete="off" required>
            <p class="my-2" style="font-size: .75rem; color: red;" class="error ps-1 my-2" id="dob_error"></p>
          </div>

          <div class="mb-3">
            <label for="" class="form-label">Email </label>
            <input type="email" name="email" id="email" class="form-control" id="email" value="<?php echo $data['email']?>" readonly>
            <p class="form-text ps-1">You can't update your email here.</p>
          </div>

          <div class="mb-3">
            <label for="" class="form-label">Password </label>
            <input type="password" name="password" id="password" class="form-control" value="<?php echo $data['password']?>" id="password" readonly>
            <p class="form-text ps-1">You can't update your password here.</p>
          </div>

          <div class="mb-3">
            <label for="" class="form-label">Mobile </label>
            <input type="text" name="mobile" id="mobile" class="form-control" id="mobile" value="<?php echo $data['mobile']?>" autocomplete="off" required>
            <p class="my-2" style="font-size: .75rem; color: red;" class="error ps-1 my-2" id="mobile_error"></p>
          </div>

          <div class="mb-3">
            <label for="" class="form-label">Address </label>
            <textarea name="address" id="address" class="form-control" rows="3" cols="8" required><?php echo $data['address']?></textarea>
          </div>

          <div class="mb-3">
            <input type="submit" class="btn btn-primary" name="submit" value="Update">
          </div>

        </form>
    </div>
  </div>
</section>

<!-- <script>
  $('#form').submit((e) => { // Accessing form data using JQuery
    e.preventDefault();

    // Accessing all input fields using JQuery



  })
</script> -->