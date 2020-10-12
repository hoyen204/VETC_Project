<?php
    include 'db_connect.php';
    $message = '';

    
    $gvien = 0;
    $user = isset($_POST['user']) ? $_POST['user'] : '';
    $pass = isset($_POST['pass']) ? password_hash($_POST['pass'], PASSWORD_DEFAULT) : '';
    $name = isset($_POST['name']) ?$_POST['name'] : '';
    $gioitinh = isset($_POST['sex']) ? $_POST['sex'] : '';
    $gvien = isset($_POST['gvien']) ? $_POST['gvien'] : '';
    $email = isset($_POST['email']) ? $_POST['email']: '';
    $sdt = isset($_POST['sdt']) ? $_POST['sdt'] : '';
    $lop = isset($_POST['lop']) ? $_POST['lop'] : '';
    
    $query = "INSERT INTO users values('','$user','$pass','$name','$email','$sdt','$lop','$gioitinh','$gvien')";
    if ($db->query($query) === TRUE) {
        $status='success';
        $message='Đăng kí thành công';
    }
    else{
        $status = 'error';
        $message = 'Đăng kí không thành công';
    }

    
    $arr = array(
        'status'=> $status,
        'message' => $message
    );

    echo json_encode($arr);

?>