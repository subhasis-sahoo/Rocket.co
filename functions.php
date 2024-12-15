<?php
    require_once "dbconnect.php";

    function addRecruiter($username, $email, $password) {
        global $con;

        try {
            $qry = "INSERT INTO recruiter(username, email, password) VALUES(?, ?, ?)";
            $stmt = $con->prepare($qry);
            $stmt->bind_param("sss", $username, $email, $password);
            $res = $stmt->execute();

            return $res;

        } catch(Exception $e) {
            echo $e->getMessage();
        } finally {
            // $conn->close();
        }
    }


    function isUserExists($email, $password) {
        global $con;

        try {
            $qry = "SELECT * FROM recruiter WHERE email = ? OR password = ?";
            $stmt = $con->prepare($qry);
            $stmt->bind_param("ss", $email, $password);
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
            // $conn->close();
        }
    }

    // ranjeet

//adding new user in the table
function updateUser($name, $gender, $dob, $email, $password, $mobile, $address, $resume,$image,$uid)
{
  global $con;
  try {
    $qry = "update table user set name=?,gender=?,dob=?,email=?,password=?,mobile=?,address=?,resume=?,image=? where uid=?";
    $stm = $con->prepare($qry);
    $stm->bind_param("sssisssssi",$name, $gender, $dob, $email, $password, $mobile, $address, $resume,$image,$uid );
    $stm->execute();
    // return $status;
    if($con->affected_rows>0){
      return true;
    }else{
      return false;
    }

  } catch (Exception $e) {
    $e->getMessage();
  } finally {
    $con->close();
  }
}


//adding new admin in the table
function updateAdmin($name, $gender, $dob, $email, $password, $mobile, $address,$image,$aid)
{
  global $con;
  try {
    $qry = "update table admin set name=?,gender=?,dob=?,email=?,password=?,mobile=?,address=?,image=? where aid=?";
    $stm = $con->prepare($qry);
    $stm->bind_param("sssssissi", $name, $gender, $dob, $email, $password, $mobile, $address,$image,$aid);
    $stm->execute();
    if($con->affected_rows>0){
      return true;
    }else{
      return false;
    }
  } catch (Exception $e) {
    $e->getMessage();
  } finally {
    $con->close();
  }
}


//adding job in job table
function addJob($aid, $companyname, $jobname, $location, $salary, $experience, $description)
{
  global $con;
  try {
    $qry = "insert into job (adminid,companyname,jobname,location,salary,experience,description) values(?,?,?,?,?,?,?)";
    $stm = $con->prepare($qry);
    $stm->bind_param("isssdss", $aid, $companyname, $jobname, $location, $salary, $experience, $description);
    $res = $stm->execute();
    return $res;
  } catch (Exception $e) {
    $e->getMessage();
  } finally {
    $con->close();
  }
}


//getting all job from the job table that show in home page of user
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
    $con->close();
  }
}


//adding data into applied job table
function addAppliedJob($uid, $jid, $adminId, $userName, $jobName, $AadminName)
{
  global $con;
  try {
    $qry = "insert into appliedjob (userid,jobid,adminid,username,jobname,adminname) values(?,?,?,?,?,?)";
    $stm = $con->prepare($qry);
    $stm->bind_param("iiisss", $uid, $jid, $adminId, $userName, $jobName, $AadminName);
    $res = $stm->execute();
    return $res;
  } catch (Exception $e) {
    $e->getMessage();
  } finally {
    $con->close();
  }
}

//delet job by the admin

function deleteJob($jid){
  global $con;
  try{
    $qry="delete from job where jid=?";
    $stm=$con->prepare($qry);
    $stm->bind_param("i",$jid);

    if($con->affected_rows>0){
      echo " delet successfully";
    }else{
      echo "failed";
    }
  }catch(Exception $e){
    $e->getMessage();
  }finally{
    $con->close();
  }
}

//getting all job post by a admin
function getPostJob($aid){
  global $con;
  try{
    $qry="select * form job where adminid=?";
    $stm=$con->prepare($qry);
    $stm->bind_param("i",$aid);
    $result=$stm->execute();
    if($result){
      return $result;
    }else{
      return false;
    }
  }catch(Exception $e){
    $e->getMessage();
  }finally{
    $con->close();
  }
}






?>