<?php
    require_once "dbconnect.php";

    function addRecruiter($username, $email, $password) {
        global $con;

        try {
            $qry = "INSERT INTO recruiter(name, email, password) VALUES(?, ?, ?)";
            $stmt = $con->prepare($qry);
            $stmt->bind_param("sss", $username, $email, $password);
            $res = $stmt->execute();

            return $res;

        } catch(Exception $e) {
            echo $e->getMessage();
        } finally {
            // $con->close();
        }
    }


    function addJobseeker($username, $email, $password) {
        global $con;

        try {
            $qry = "INSERT INTO jobseeker(name, email, password) VALUES(?, ?, ?)";
            $stmt = $con->prepare($qry);
            $stmt->bind_param("sss", $username, $email, $password);
            $res = $stmt->execute();

            return $res;

        } catch(Exception $e) {
            echo $e->getMessage();
        } finally {
            // $con->close();
        }
    }


    function isRecruiterExists($email) {
        global $con;

        try {
            $qry = "SELECT * FROM recruiter WHERE email = ?";
            $stmt = $con->prepare($qry);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();
            if($result->num_rows > 0) {
                return true;
            } else {
                return false;
            }

        } catch(Exception $e) {
            echo $e->getMessage();
        } finally {
            // $con->close();
        }
    }

    function isJobseekerExists($email) {
        global $con;

        try {
            $qry = "SELECT * FROM jobseeker WHERE email = ?";
            $stmt = $con->prepare($qry);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();
            if($result->num_rows > 0) {
                return true;
            } else {
                return false;
            }

        } catch(Exception $e) {
            echo $e->getMessage();
        } finally {
            // $con->close();
        }
    }


    function jobseekerEmailCredential($email, $password){
        global $con;

        try{
            $qry = "SELECT * FROM jobseeker WHERE email = ? OR password = ? ";
            $stmt = $con->prepare($qry);
            $stmt->bind_param("ss", $email,$password);
            $stmt->execute();
            $result = $stmt->get_result();
            if($result->num_rows > 0) {
                return true;
            }else{
                return false;
            }
        } catch(Exception $e) {
             echo $e->getMessage();
        } finally {
            
        }
    }

    function recruiterEmailCredential($email, $password){
        global $con;

        try{
            $qry = "SELECT * FROM recruiter WHERE email = ? OR password = ? ";
            $stmt = $con->prepare($qry);
            $stmt->bind_param("ss", $email,$password);
            $stmt->execute();
            $result = $stmt->get_result();
            if($result->num_rows > 0) {
                return true;
            }else{
                return false;
            }
        } catch(Exception $e) {
             echo $e->getMessage();
        } finally {

        }
    }


    // Returning recruiter data using email
    function getRecruiterDataByEmail($email) {
        global $con;

        try {
            $qry = "SELECT * FROM recruiter WHERE email = ?";
            $stmt = $con->prepare($qry);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();
            if($result->num_rows > 0) {
                return $result;
            } else {
                return false;
            }

        } catch(Exception $e) {
            echo $e->getMessage();
        } finally {
            // $con->close();
        }
    }

    // Returning jobseeker data using email
    function getJobseekerDataByEmail($email) {
        global $con;

        try {
            $qry = "SELECT * FROM jobseeker WHERE email = ?";
            $stmt = $con->prepare($qry);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();
            if($result->num_rows > 0) {
                return $result;
            } else {
                return false;
            }

        } catch(Exception $e) {
            echo $e->getMessage();
        } finally {
            // $con->close();
        }
    }

    // Check wheater the job id is valid or not
    function isValidJobId($jid) {
        global $con;

        try {
            $qry = "SELECT * FROM job WHERE jid = ?";
            $stmt = $con->prepare($qry);
            $stmt->bind_param("i", $jid);
            $stmt->execute();
            $result = $stmt->get_result();
            if($result->num_rows > 0) {
                return true;
            } else {
                return false;
            }

        } catch(Exception $e) {
            echo $e->getMessage();
        } finally {
            // $con->close();
        }
    }
    


// ranjeet
// require "dbconnection.php";
//adding new user in the table
    function updateJobssekerData($name, $gender, $dob, $password, $mobile, $address, $resume, $new_name, $email)
    {
    global $con;
    try {
        $qry = "update jobseeker set name=?, gender=?, dob=?, password=?, mobile=?, address=?, resume=?, image=? where email=?";
        $stm = $con->prepare($qry);
        $stm->bind_param("ssssissss", $name, $gender, $dob, $password, $mobile, $address, $resume, $new_name, $email);
        $stm->execute();

        if($con->affected_rows>0){
            return true;
        }else{
            return false;
        }

    } catch (Exception $e) {
        $e->getMessage();
    } finally {
        // $con->close();
    }
    }


//adding new admin in the table
    function updateRecruiterData($name, $gender, $dob, $password, $mobile, $address, $new_name, $email) {
        global $con;
        try {
            $qry = "update recruiter set name=?, gender=?, dob=?, password=?, mobile=?, address=?, image=? where email=?";
            $stm = $con->prepare($qry);
            $stm->bind_param("ssssisss", $name, $gender, $dob, $password, $mobile, $address, $new_name, $email);
            $stm->execute();
            // echo $res;
            if($con->affected_rows>0){
                echo "true";
                return true;
            }else{
                return false;
            }
        } catch (Exception $e) {
            $e->getMessage();
        } finally {
            // $con->close();
        }
    }


//adding job in job table
function addJob($aid, $companyname, $jobname, $location, $salary, $experience, $description,$image)
{
  global $con;
  try {
    $qry = "insert into job (adminid,companyname,jobname,location,salary,experience,description,image) values(?,?,?,?,?,?,?,?)";
    $stm = $con->prepare($qry);
    $stm->bind_param("isssdsss", $aid, $companyname, $jobname, $location, $salary, $experience, $description,$image);
    $res = $stm->execute();
    return $res;
  } catch (Exception $e) {
    $e->getMessage();
  } finally {
    // $con->close();
  }
}


// getting all job from the job table that show in home page of user
function getAllJob()
{
  global $con;
  try {
    $qry = "select * from job";
    $stm = $con->prepare($qry);
    $stm->execute();
    $result = $stm->get_result();
    if ($result->num_rows > 0) {
      return $result;
    } else {
      return false;
    }
  } catch (Exception $e) {
    $e->getMessage();
  } finally {
    // $con->close();
  }
}


//adding data into applied job table
// function addAppliedJob($uid, $jid, $adminId, $userName, $jobName, $AadminName)
// {
//   global $con;
//   try {
//     $qry = "insert into appliedjob (userid,jobid,adminid,username,jobname,adminname) values(?,?,?,?,?,?)";
//     $stm = $con->prepare($qry);
//     $stm->bind_param("iiisss", $uid, $jid, $adminId, $userName, $jobName, $AadminName);
//     $res = $stm->execute();
//     return $res;
//   } catch (Exception $e) {
//     $e->getMessage();
//   } finally {
//     $con->close();
//   }
// }

//delet job by the admin
// function deleteJob($jid){
//   global $con;
//   try{
//     $qry="delete from job where jid=?";
//     $stm=$con->prepare($qry);
//     $stm->bind_param("i",$jid);

//     if($con->affected_rows>0){
//       echo " delet successfully";
//     }else{
//       echo "failed";
//     }
//   }catch(Exception $e){
//     $e->getMessage();
//   }finally{
//     $con->close();
//   }
// }

//getting all job post by a admin
function getRecruiterAllJob($aid){
  global $con;
  try{
    $qry="select * from job where adminid=?";
    $stm=$con->prepare($qry);
    $stm->bind_param("i",$aid);
    $stm->execute();
    $result = $stm->get_result();
    if($result->num_rows > 0) {
        return $result;
    } else {
        return false;
    }
  }catch(Exception $e){
    $e->getMessage();
  }finally{
    // $con->close();
  }
}

function getAdminIdJobName($jid)
{
  global $con;
  try {
    $qry = "select adminid,jobname from job where jid=?";
    $stm = $con->prepare($qry);
    $stm->bind_param("i", $jid);
    $stm->execute();
    $result = $stm->get_result();
    if ($result->num_rows > 0) {
      return $result;
    } else {
      return false;
    }
  } catch (Exception $e) {
    $e->getMessage();
  } finally {
    // $con->close();
  }
}


function addAppliedJob($uid, $jid,$userName)
{
  $result=getAdminIdJobName($jid);
  $data=$result->fetch_assoc();
  $adminId=$data['adminid'];
  $jobName=$data['jobname'];

  global $con;
  try {
    $qry = "insert into appliedjob (userid,jobid,adminid,username,jobname) values(?,?,?,?,?)";
    $stm = $con->prepare($qry);
    $stm->bind_param("iiiss", $uid, $jid, $adminId, $userName, $jobName);
    $res = $stm->execute();
    return $res;
  } catch (Exception $e) {
    $e->getMessage();
  } finally {
    // $con->close();
  }
}



?>