<?php
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $gender = $_POST['gender'];
  $dob = $_POST['dob'];
  $mobile = $_POST['mobile'];
  $address = $_POST['address'];
  $password = $_POST['password'];
  $resume = $_POST['resume'];
  $image = $_FILES['image'];
  $email = $_SESSION['email'];

  echo $email;

  $new_name = time() . "-" . $image['name'];
  $upload_path = "jobseeker_profile_pictures/" . $new_name;
  if (move_uploaded_file($image['tmp_name'],  $upload_path)) {
    require_once "functions.php";
    $status = updateJobssekerData($name, $gender, $dob, $password, $mobile, $address, $resume, $new_name, $email);
    if ($status) {
      echo " updated .";
    } else {
      echo " Error";
    }
  } else {
    echo "File Upload Error";
  }
}
