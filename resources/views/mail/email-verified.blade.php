<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f934;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 90%;
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .header {
            background-color: #0b6d3a;
            padding: 20px;
            text-align: center;
        }

        .header h2 {
            color: white;
            margin: 0;
            font-size: 1.5em;
        }

        .container-body {
            padding: 20px;
            text-align: left;
        }

        .footer img {
            display: block;
            margin: 0 auto;
            max-width: 50%;
        }

        h2 {
            color: #0b6d3a;
            font-size: 1.4em;
        }

        p, ul {
            font-size: 1em;
            line-height: 1.6;
            color: #555;
            margin: 0 0 15px;
        }

        ul {
            padding-left: 20px;
            list-style-type: none; /* Xóa dấu chấm đầu dòng */
        }

        li {
            margin-bottom: 8px;
        }

        .button-container {
            text-align: center;
            margin: 20px 0;
        }

        .button-container a {
            display: inline-block;
            padding: 12px 25px;
            color: white;
            background-color: #0b6d3a;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1em;
            transition: all 0.3s ease;
        }

        .button-container a:hover {
            color: #0b6d3a;
            background-color: white;
            border: 2px solid #0b6d3a;
        }

        .footer {
            background-color: #c9d0cc63;
            text-align: center;
            padding: 10px;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="container">
    <div class="header">
        <h2>Xác Thực Tài Khoản</h2>
    </div>
    <div class="container-body">
        <h2>Chào {{ $name }},</h2>

        <p>Chúc mừng bạn đã đăng ký thành công tài khoản sinh viên. Dưới đây là thông tin tài khoản của bạn:</p>

        <ul>
            <li><i class="fas fa-user"></i><strong> &nbsp;Tên đăng nhập:</strong> {{ $username }}</li>
            <li><i class="fas fa-key"></i><strong> &nbsp;Mật khẩu:</strong> {{ $password }}</li>
        </ul>

        <p>Để kích hoạt tài khoản, vui lòng nhấp vào liên kết dưới đây để xác thực email của bạn:</p>

        <div class="button-container">
            <a href="{{ route('student.verify', ['token'=>$token]) }}">Xác thực tài khoản</a>
        </div>
    </div>
    <div class="footer">
        <img src="{{ $message->embed(public_path('assets/admin/images/logo-none-background.png')) }}" alt="University Logo">
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" integrity="sha512-Tn2m0TIpgVyTzzvmxLNuqbSJH3JP8jm+Cy3hvHrW7ndTDcJ1w5mBiksqDBb8GpE2ksktFvDB/ykZ0mDpsZj20w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
