<?php
    require_once "dbconnect.php";

    function addRecruiter($username, $email, $password) {
        global $conn;

        try {
            $qry = "INSERT INTO recruiter(username, email, password) VALUES(?, ?, ?)";
            $stmt = $conn->prepare($qry);
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
        global $conn;

        try {
            $qry = "SELECT * FROM recruiter WHERE email = ? OR password = ?";
            $stmt = $conn->prepare($qry);
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


?>