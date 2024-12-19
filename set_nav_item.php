<?php
    session_start();
    $navItem = $_POST['selectedNavitem'];
    $_SESSION['navItem'] = $navItem;
    // echo json_encode(['msg' => 'success', 'id' => $navItem]);
?>