<?php
session_start();
if (isset($_POST['submit'])) {
  require_once "functions.php";
  $email = $_SESSION['email'];
  $result = getRecruiterDataByEmail($email);
  $data = $result->fetch_assoc();


  $aid = $data['aid']; // Accessing recriuiter id
  $companyname = $_POST['cname'];
  $jobname = $_POST['jname'];
  $location = $_POST['location'];
  $salary = $_POST['salary'];
  $experience = $_POST['experience'];
  $description = $_POST['description'];
  $image = $_FILES['image'];

  $new_name = time() . "-" . $image['name'];
  $upload_path = "company_logos/" . $new_name;
  if (move_uploaded_file($image['tmp_name'],  $upload_path)) {

    $status = addJob($aid, $companyname, $jobname, $location, $salary, $experience, $description, $new_name);
    if ($status) {
      echo " updated .";
    } else {
      echo " Error";
    }
  } else {
    echo "File Upload Error";
  }
}
?>