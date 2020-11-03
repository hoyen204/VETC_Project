<?php
    function ReturnResult($status,$message){
        $arr = array('status'=> $status,'message' => $message);
        echo json_encode($arr);
    }
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "vetc";

    // Create connection
    $db = new mysqli($servername,$username,$password,$db_name);

    // Check connection
    if ($db -> connect_errno) {
    echo "Failed to connect to MySQL: " . $db -> connect_error;
    exit();
    }
?>