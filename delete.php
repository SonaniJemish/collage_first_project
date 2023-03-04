<?php
    session_start();
    include 'Connection.php';
    $Email = $_SESSION['Email'];
  
    $query = "delete from details where Email = '$Email'";
    $result = mysqli_query($conn, $query);
    $_SESSION['drop'] = TRUE;
    
    session_unset();
    session_destroy();
    header('location: login.php');
    exit;

?>