<?php
    include 'api/db_connect.php';
    $message = '';
    
    $user = isset($_POST['user']) ? $_POST['user'] : '';
    $pass = isset($_POST['pass']) ? password_hash($_POST['pass'], PASSWORD_DEFAULT) : '';
    $repass = isset($_POST['repass']) ? $_POST['repass'] : '';
    $name = isset($_POST['name']) ?$_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email']: '';
    $sdt = isset($_POST['phone']) ? $_POST['phone'] : '';
    $gioitinh = isset($_POST['gender']) ? $_POST['gender'] : '';

    if(isset($_POST['dangki'])){
        if($_POST['pass'] != $repass){
            $status = 'error!';
            $message = 'Mật khẩu xác nhận không chính xác';
            ReturnResult($status,$message);
            exit();
        }

        $sql="SELECT * FROM gvien WHERE magv='$user'";
        if ($result=mysqli_query($db,$sql))
        {
            if(mysqli_num_rows($result)>0){
                $status = 'error!';
                $message = "Mã giáo viên đã được đăng kí";
                ReturnResult($status,$message);
                exit();
            }
        }

        $query = "INSERT INTO gvien values('$user','$name','$pass','$email','$sdt','$gioitinh')";
        if ($db->query($query) === TRUE) {
            $status='success';
            $message='Đăng kí thành công';
        }
        else{
            $status = 'error';
            $message = 'Đăng kí không thành công';
        }
        
        ReturnResult($status,$message);
    }
?>

<!DOCTYPE html>
<html>

<head>
    <title>Đăng Kí Giảng Viên</title>
</head>

<body>

    <div style="login-box box-custom">
        <form action="#" method="post" id="fdangki">
            <table align="center">
                <tr style="text-align:center">
                    <th class="login-box-msg">Đăng kí</th>
                </tr>
                <tr>
                    <td>
                        <input id="user" name="user" type="text" placeholder="Mã Giáo Viên" autofocus="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input id="pass" name="pass" type="password" placeholder="Mật khẩu">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input id="repass" name="repass" type="password" placeholder="Nhập lại mật khẩu">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input id="name" name="name" type="text" placeholder="Tên Giáo Viên">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input id="email" name="email" type="text" placeholder="Email">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input id="phone" name="phone" type="text" placeholder="Số điện thoại">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input id="gender" name="gender" type="radio" value="Nam" checked=true>Nam</input>
                        <input id="gender" name="gender" type="radio" value="Nu">Nữ</input>
                    </td>
                </tr>
                <tr align="center">
                    <td>
                        <input name="dangki" type="submit" form="fdangki" value="Đăng kí">
                    </td>
                </tr>
                <tr align="center">
                    <td class="login-box-msg" id="message">
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <style>
    .login-box,
    .register-box {
        width: 400px;
        margin: 10px auto;
        padding: 20px;
        background: #080808;
        opacity: 0.9;
    }

    .login-box-msg,
    .register-box-msg {
        margin: 0;
        padding: 0 20px 20px 20px;
        text-align: center;
        font-size: 20px;
        ;
        font-weight: bold;
    }

    .box-custom {
        border: 1px solid #cccccc;
        padding: 20px;
        color: #666;
    }

    li {
        padding: 5px 50px 6px 7px;
        margin-top: 3px;
        margin-bottom: 3px;
        list-style: none;
    }
    </style>
</body>

</html>