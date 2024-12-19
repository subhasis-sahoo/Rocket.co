<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./bootstrap/bootstrap.min.css">
  <style>
    body{
      overflow-x: hidden;
    }
  </style>
</head>

<body>
  <div class="main mt-5 mb-5">
    <div class="row justify-content-center">
      <div class="col-md-6 col-lg-4 border rounded p-4 shadow-lg bg-light">
        <form action="update_jobseeker_data.php" method="post" id="form" enctype="multipart/form-data">

        <div class="mb-3">
            <label for="image" class="form-label text-uppercase font-weight-bold">Upload Image</label>
            <input type="file" name="image" class="form-control form-control-lg" accept="image/*" required>
            <p style="font-size: .75rem; color: red;" id="image_error"></p>
          </div>

          <div class="mb-3">
            <label for="" class="form-label text-uppercase font-weight-bold">Name </label>
            <input type="text" class="form-control  form-control-lg" name="name">
          </div>

          <div class="mb-3">
            <label for="" class="form-label text-uppercase font-weight-bold">Gender</label>
            <div class="form-check form-check-inline">
              <input type="radio" name="gender" value="male" class="form-check-input"> Male
            </div>
            <div class="form-check form-check-inline">
              <input type="radio" name="gender" value="female" class="form-check-input"> Female
            </div>
            <div class="form-check form-check-inline">
              <input type="radio" name="gender" value="other" class="form-check-input"> Other
            </div>
          </div>

          <div class="mb-3">
            <label for="" class="form-label text-uppercase font-weight-bold">Dob </label>
            <input type="date" name="dob" class="form-control form-control-lg">
          </div>

          <div class="mb-3">
            <label for="" class="form-label text-uppercase font-weight-bold">Mobile </label>
            <input type="tel" name="mobile" class="form-control form-control-lg">
          </div>

          <div class="mb-3">
            <label for="" class="form-label text-uppercase font-weight-bold">Password </label>
            <input type="password" name="password" class="form-control form-control-lg">
          </div>

          <div class="mb-3">
            <label for="" class="form-label text-uppercase font-weight-bold">Address </label>
            <textarea name="address" id="" class="form-control form-control-lg" rows="3"
              cols="8"></textarea>
          </div>

          <div class="mb-3">
            <label for="" class="form-label text-uppercase font-weight-bold">Resume link </label>
              <input type="text" name="resume"  class="form-control form-control-lg" required>
          </div>

          <div class="mb-3 d-flex justify-content-between">

            <input type="submit" class="btn btn-primary btn-block btn-lg" name="submit"
              value="Update" style="width:8rem;">
            
              <input type="button" class="btn btn-warning btn-block btn-lg" name="discard"
              value="Reset" style="width:8rem;">

              <input type="button" class="btn btn-danger btn-block btn-lg" name="back"
              value="Back" style="width:8rem;">
          </div><br>
        </form>
      </div>
    </div>

  </div>
  <script src="./bootstrap/bootstrap.bundle.min.js"></script>

</body>

</html>