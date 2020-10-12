<?php
    include 'db_connect.php';

    $user = isset($_POST['user']) ? trim($_POST['user']) : '';
    $pass = isset($_POST['pass']) ? trim($_POST['pass']) : '';

    $query = "SELECT * from users where user = '$user'";
    $result = $db->query($query);
    $row = $result-> fetch_assoc();
    if($result->num_rows <=0){
        $status = 'error';
        $message = 'Đăng nhập thất bại, mã sinh viên không tồn tại';
    }
    else if (password_verify($pass,$row['pass'])){
        $status = 'success';
        $message = 'Đăng nhập thành công';
    }
    else{
        $status = 'error';
        $message = 'Đăng nhập thất bại, mật khẩu không chính xác';
    }
    $arr = array('status' => $status,'message' => $message);
    echo json_encode($arr);
?>