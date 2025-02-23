<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .header {
            background-color: #0b6d3a;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
        }

        .content {
            padding: 30px;
        }

        .content h4 {
            color: #0b6d3a;
            font-size: 20px;
            margin-bottom: 20px;
        }

        .content p {
            color: #666;
            line-height: 1.6;
            font-size: 16px;
        }

        .content .button {
            display: inline-block;
            background-color: #059669;
            color: white;
            padding: 12px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
            font-size: 16px;
        }

        .content .button:hover {
            background-color: #059669;
        }

        .footer {
            text-align: center;
            padding: 20px;
            background-color: #f4f4f4;
            color: #888;
            font-size: 12px;
        }

        .footer img {
            max-width: 70px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
<div class="container">
    <!-- Header section -->
    <div class="header">
        <h1>Xác nhận đổi mật khẩu</h1>
    </div>

    <!-- Main content section -->
    <div class="content">
        <h4>Xin chào {{ $student->name }},</h4>
        <p>Bạn đã yêu cầu đổi mật khẩu cho tài khoản của mình. Để hoàn tất việc đặt lại mật khẩu, vui lòng nhấn vào nút bên dưới:</p>
        <a href="{{ route('student.reset-password', ['token' => $token]) }}" class="button">Đặt lại mật khẩu</a>
        <p>Nếu bạn không yêu cầu thay đổi mật khẩu, vui lòng bỏ qua email này hoặc liên hệ với quản trị viên để được hỗ trợ.</p>
    </div>

    <!-- Footer section -->
    <div class="footer">
        <img src="{{ $message->embed(public_path('assets/client/image/logo-vnua.png')) }}">
        <p>Học viện Nông nghiệp Việt Nam</p>
    </div>
</div>
</body>
</html>
