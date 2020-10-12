<!DOCTYPE html>
<html>
<head>
    <title>Đăng Kí Giảng Viên</title>
</head>
<body>

    <div style="login-box box-custom" >
        <p style="" class="login-box-msg">Đăng kí</p>
        <form action="#" method="post" id="fdangki">
            <ul style="text-align:center;list-style-type:none">
                <div style="padding: 5px 4px 6px 7px;">
                    <li >
                        <input id="user" name="user" type="text" placeholder="Mã Giáo Viên" autofocus="">
                    </li>
                    <li>
                        <input id="pass" name="pass" type="password" placeholder="Mật khẩu">
                    </li>
                    <li>
                        <input id="name" name="name" type="text" placeholder="Tên Giáo Viên">
                    </li>
                    <li>
                        <input id="email" name="email" type="text" placeholder="Email">
                    </li>
                    <li>
                        <input id="user" name="user" type="text" placeholder="Mã Giáo Viên">
                    </li>
                    <li>
                        <input id="user" name="user" type="text" placeholder="Mã Giáo Viên">
                    </li>
                    <input id="gvien" name="gvien" type="hidden" value="1">
                </div>
            </ul>
        </form>
        <div style="text-align:center;">
            <button type="submit" form="fdangki" value="Submit">Đăng kí</button>
        </div>
    </div>

    <style>
    .login-box, .register-box {
        width: 400px;
        margin: 10px auto;
        padding: 20px;
        background: #080808;
        opacity: 0.9;
    }
    .login-box-msg, .register-box-msg {
        margin: 0;
        text-align: center;
        padding: 0 20px 20px 20px;
        text-align: center;
        font-size: 20px;;
        font-weight: bold;
    }
    .box-custom{
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