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
                        <input id="repass" name="repass" type="pass" placeholder="Nhập lại mật khẩu">
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
                        <input type="submit" form="fdangki" value="Đăng kí">
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
        text-align: center;
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