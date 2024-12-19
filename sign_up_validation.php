<?php
    session_start();
    // header('Content-Type: application/json');
    // error_reporting(0);
    // ini_set('display_errors', 0);


    $user = $_POST['user'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $c_password = $_POST['cPassword'];

    

    // echo "$user, $username, $email, $password, $c_password";

    require_once "functions.php";

    if($user == 'jobseeker') {
        // echo "Hello Jobseeker.";
        $response = isJobseekerExists($email);
        if($response) {
            // echo "yes";
            $data = ['isExists' => 'yes', 'user' => $user];
            echo json_encode($data);
        } else {
            // echo "$username, $email, $password";
            $status = addJobseeker($username, $email, $password);
            if($status) {
                $data = ['isExists' => 'no', 'user' => $user];
                echo json_encode($data);
                $_SESSION['user'] = $user;
                $_SESSION['email'] = $email;
            }
        }
    } else {
        // echo "Hello Recruiter.";
        $response = isRecruiterExists($email);
        if($response) {
            $data = ['isExists' => 'yes', 'user' => $user];
            echo json_encode($data);
        } else {
            // echo "$username, $email, $password";
            $status = addRecruiter($username, $email, $password);
            if($status) {
                $data = ['isExists' => 'no', 'user' => $user];
                echo json_encode($data);
                $_SESSION['user'] = $user;
                $_SESSION['email'] = $email;
            }
        }

    }
?>