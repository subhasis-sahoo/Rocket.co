<?php
session_start();
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $gender = $_POST['gender'];
  $dob = $_POST['dob'];
  $mobile = $_POST['mobile'];
  $address = $_POST['address'];
  $password = $_POST['password'];
  $image = $_FILES['image'];
  $email = $_SESSION['email'];

  // echo $email;

  $new_name = time() . "-" . $image['name'];
  $upload_path = "recruiter_profile_pictures/" . $new_name;
  if (move_uploaded_file($image['tmp_name'],  $upload_path)) {

    require_once "functions.php";
    $res = updateRecruiterData($name, $gender, $dob, $password, $mobile, $address, $new_name, $email);
    if ($res) {
      header("location:recruiter_profile.php");
    } else {
      // echo " Error";
    }
  } else {
    // echo "File Upload Error";
  }
}
?>