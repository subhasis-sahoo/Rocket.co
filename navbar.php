<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rocket.co</title>

    <!-- Adding bootstrap css file. -->
    <link rel="stylesheet" href="./bootstrap/bootstrap.min.css">

    <!-- Calling css file using php which load the css file every time by which css file properly works. -->
    <link rel="stylesheet" href="utility.css?v=<?php echo time(); ?>">

    <!-- Adding JQuery  -->
    <script src="./jquery-3.7.1.min.js"></script>
</head>
<body>
    <!-- navabar section for the website-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="box-shadow: 0 0 4px #bbd0e2;">
        <div class="container_width container-fluid mx-auto">
          <img src="./assets/Rockets.co.svg" alt="Logo" width="150px">
          <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon text-dark"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto gap-4">

              <?php 
                if(isset($_SESSION['user'])) {
                  if($_SESSION['user'] == 'jobseeker') {
                    ?>
                      <a class="nav-link active" aria-current="page" href="jobseeker_home.php" id="home" onclick="handelNavItem('home')">Home</a>
                      <a class="nav-link" href="#" id="applid_jobs" onclick="handelNavItem('applid_jobs')">Applied Jobs</a>
                      <a class="nav-link" href="jobseeker_profile.php" id="profile" onclick="handelNavItem('profile')">Profile</a>
                      <a class="d-flex justify-content-center align-items-center text-white btn btn-sm btn-primary px-3" href="log_out.php" tabindex="-1" aria-disabled="true">Log Out</a>
                    <?php
                  } else if($_SESSION['user'] == 'recruiter') {
                    ?>
                      <a class="nav-link active" aria-current="page" href="recruiter_home.php" id="home" onclick="handelNavItem('home')">Home</a>
                      <a class="nav-link" href="add_job.php" id="add" onclick="handelNavItem('add')">Add</a>
                      <a class="nav-link" href="recruiter_all_jobs.php" id="edit" onclick="handelNavItem('edit')">My Jobs</a>
                      <a class="nav-link" href="recruiter_profile.php" id="profile" onclick="handelNavItem('profile')">Profile</a>
                      <a class="d-flex justify-content-center align-items-center text-white btn btn-sm btn-primary px-3" href="log_out.php" tabindex="-1" aria-disabled="true">Log out</a>
                    <?php
                  }
                } else {
                  ?>
                  <a class="nav-link active" aria-current="page" href="index.php" id="home" onclick="handelNavItem('home')">Home</a>
                  <a class="nav-link" href="#service" id="services" onclick="handelNavItem('services')">Services</a>
                  <a class="nav-link" href="#review" id="reviews" onclick="handelNavItem('reviews')">Reviews</a>
                  <a class="d-flex justify-content-center align-items-center text-white btn btn-sm btn-primary px-3" href="sign_up.php" tabindex="-1" aria-disabled="true">Sign Up</a>
                  <?php
                }
              ?>

            </div>
          </div>
        </div>
      </nav>
</body>

<!-- Adding bootstrap javasceipt file. -->
<script src="./Bootstrap/bootstrap.bundle.min.js"></script>
<script>
  let currSelectedNav = $('#home');
  let navItem
  function handelNavItem(id) {
    let item;
    $.ajax({
      url: "set_nav_item.php",
      method: 'POST',
      data: {selectedNavitem : id},
      success: function(data) {
        // data = JSON.parse(data);
        // console.log(data);
      }
    })
  }
  navItem = $(`#<?php echo $_SESSION['navItem']?>`);
  console.log('<?php echo $_SESSION['navItem']?>');
  console.log("naItem", navItem.text());
  currSelectedNav?.removeClass('active');
  currSelectedNav = navItem;
  currSelectedNav?.addClass('active');
</script>
</html>