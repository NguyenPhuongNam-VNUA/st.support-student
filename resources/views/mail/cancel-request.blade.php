<!doctype html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Template</title>
</head>

<body style="margin: 0; padding: 0; font-family: Arial, sans-serif; background-color: rgba(143, 141, 141, 0.51);">
<div style="width: 90%; max-width: 600px; margin: 20px auto; padding: 20px; position: relative;">
    <!-- Outer Container -->
    <div style="position: relative; padding: 20px; background-color: #ffffff; box-shadow: 0 0 0 1px #f1f1f1;">
        <!-- Red Border Background -->
        <div style="position: absolute; top: 14px; left: 14px; right: -14px; bottom: -14px; background-color: #e30c36; z-index: -1;"></div>

        <!-- Header -->
        <div style="text-align: center; margin-bottom: 20px;">
            <h2 style="font-size: 1.5em; margin: 0; color: #000;">Chào mừng bạn đến với hệ thống của chúng tôi</h2>
        </div>

        <!-- Content -->
        <div>
            <div style="border-bottom: 3px solid #ff0020; padding-bottom: 10px; margin-bottom: 15px; display: flex; align-items: center; justify-content: space-between;">
                <div style="font-size: 1.2em; font-weight: bold; color: #000;">Đăng ký không thành công</div>
                <img src="{{ $message->embed(public_path('assets/client/image/logo-vnua.png')) }}" alt="Logo" style="width: 45px; height: 45px; object-fit: cover;">
            </div>
            <p style="font-size: 1em; line-height: 1.6; color: #000; margin: 0;">
                Kính gửi: {{ $request->name }},
            </p>
            <p style="font-size: 1em; line-height: 1.6; color: #000; margin: 10px 0;">
                Đơn đăng ký của bạn đăng ký không thành công.
            </p>
            <p style="font-size: 1em; line-height: 1.6; color: #000; margin: 10px 0;">
                Lý do: {{ $cancelContent }}
            </p>
        </div>

        <!-- Footer -->
        <div style="text-align: center; margin-top: 20px; padding: 10px; background-color: #f4f4f4;">
            <img src="{{ $message->embed(public_path('assets/admin/images/logo-none-background.png')) }}" alt="University Logo" style="max-width: 70px; margin-top: 10px;">
        </div>
    </div>
</div>
</body>

</html>
