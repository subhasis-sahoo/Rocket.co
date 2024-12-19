<?php
    session_start();
    require_once "functions.php";
        $email = $_POST['email'];
        $password = $_POST['password'];
        $user = $_POST['user'];

    if($user == 'jobseeker'){
        // echo "job";
        $response1 = jobseekerEmailCredential($email, $password);
        if($response1){
        $data = ['isExits' => 'yes','user' => $user];
        echo json_encode($data);
        }
    }else{
        // echo "recruiter";
        $response2 = recruiterEmailCredential($email, $password);
        if($response2){
        $data = ['isExits'=> 'yes','user'=> $user];
        echo json_encode($data);
        }
    }
    $_SESSION['user'] = $user;
    $_SESSION['email'] = $email;
?> 