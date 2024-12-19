<?php
  include_once "navbar.php";
?>


<section class="container_width mx-auto px-12 row">
  <div class="d-flex flex-row align-items-center justify-content-center gap-5 mt-5 py-4">
    <div class="col-4 p-4 rounded-3 shadow bg-body mx-4 d-flex flex-column">
      <h3 class="text-center mt-1">Profile page</h3>
      <p class="mb-4 text-center" style="font-size: .75rem;">Complete your profile now to join our community.</p>
      <p class=" mb-2 text-center error" style="font-size: .75rem; color: red;" id="email_exists_error"></p>

      <form action="add_job_data.php" method="post" id="form" enctype="multipart/form-data">


        <div class="mb-3">
            <label for="image" class="form-label text-uppercase font-weight-bold">Upload Image</label>
            <input type="file" name="image" class="form-control form-control-lg" accept="image/*" required>
            <p style="font-size: .75rem; color: red;" id="image_error"></p>
          </div>

          <!-- automatically added in data base thorough cookies -->
          <!-- <div class="mb-3">
            <label for="" class="form-label">Id </label>
            <input type="text" class="form-control" name="adminid">
          </div> -->

          <div class="mb-3">
            <label for="" class="form-label text-uppercase font-weight-bold">Job Name </label>
            <input type="text" class="form-control form-control-lg" name="jname">
          </div>


          <div class="mb-3">
            <label for="" class="form-label text-uppercase font-weight-bold">Company Name </label>
            <input type="text" class="form-control form-control-lg" name="cname">
          </div>


          <div class="mb-3">
            <label for="" class="form-label text-uppercase font-weight-bold">Job Location </label>
            <input type="text" class="form-control form-control-lg" name="location">
          </div>


          <div class="mb-3">
            <label for="" class="form-label text-uppercase font-weight-bold">Salary </label>
            <input type="text" class="form-control form-control-lg" name="salary">
          </div>


          <div class="mb-3">
            <label for="" class="form-label text-uppercase font-weight-bold">Experience </label>
            <select name="experience" id="" class="form-select" aria-label="Default select example">
              <option value="Fresher">Fresher</option>
              <option value="1 yr-2 yr">1 yr-2 yr</option>
              <option value="2 yr-5 yr">2 yr-5 yr</option>
              <option value="6 yr- 10 yr">6 yr- 10 yr</option>
              <option value="10 yr+">10 yr+</option>
            </select>
          </div>

          <div class="mb-3">
            <label for="" class="form-label text-uppercase font-weight-bold">Job Description </label>
            <textarea name="description" id="" class="form-control form-control-lg"></textarea>
          </div>

          <div class="mb-3 d-flex justify-content-between">

            <input type="submit" class="btn btn-primary btn-block btn-lg" name="submit"
              value="add" style="width:8rem;">
            
              <input type="button" class="btn btn-warning btn-block btn-lg" name="discard"
              value="Reset" style="width:8rem;">

              <input type="button" class="btn btn-danger btn-block btn-lg" name="back"
              value="Back" style="width:8rem;">
          </div><br>

        </form>
    </div>
  </div>
</section>