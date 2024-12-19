<?php
session_start();
    if(!isset($_GET['jid'])) {
        header("location:jobseeker_home.php");
    } else {
        $jid = $_GET['jid'];
        // echo $jid;
        require_once "functions.php";
        $response = isValidJobId($jid);

        if($response) {
            $email = $_SESSION['email'];
            $result = getJobseekerDataByEmail($email);
            $data1 = $result->fetch_assoc();
            $uid = $data1['uid'];
            $userName = $data1['name'];
            $response = addAppliedJob($uid, $jid,$userName);
            header("location:jobseeker_home.php");
        } else {
            ?>
            <script>
                alert("Something went wrong.");
                window.location = "jobseeker_home.php";
            </script>
            <?php
        }
    }
?>