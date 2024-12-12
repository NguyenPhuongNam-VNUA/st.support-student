<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông báo đăng ký ký túc xá</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #EAE8E5;
            font-family: 'Roboto', Arial, sans-serif;
        }
        table {
            border-spacing: 0;
            border-collapse: collapse;
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
        }
        img {
            display: block;
            width: 100%;
            height: auto;
        }
        td {
            padding: 0;
        }
        a {
            text-decoration: none;
            color: inherit;
        }
    </style>
</head>
<body style="margin: 0; padding: 0; background-color: #EAE8E5; font-family: 'Roboto', Arial, sans-serif;">
<table>
    <!-- Header -->
    <tr>
        <td align="center">
            <img src="{{ $message->embed(public_path('assets/client/image/box-head.png')) }}" alt="đăng ký ký túc xá" style="margin: 20px 0 0;">
        </td>
    </tr>
    <!-- Title Section -->
    <tr>
        <td style="background-color: #FFFFFF; padding: 40px 20px 20px;">
            <h1 style="font-size: 36px; color: #1D83A8; font-family: 'Alice', serif; text-align: left;">Thông báo đăng ký ký túc xá</h1>
            <p style="font-size: 40px; font-weight: bold; color: #000;">⚊</p>
        </td>
    </tr>
    <!-- Content Section -->
    <tr>
        <td style="background-color: #FFFFFF;">
            <table>
                <tr>
                    <td style="width: 50%; padding: 20px;">
                        <p style="font-size: 15px; color: #000; font-weight: bold;">
                            Xin chào, <span style="color: #1D83A8;">{{ $request->name }}</span>!<br><br>
                            Cảm ơn bạn đã sử dụng hệ thống đăng ký của chúng tôi! 🌟<br><br><br>
                            @if($request->status === \App\Enums\StatusRequest::Completed->value)
                                Chúng tôi xin chúc mừng đơn đăng ký của bạn <span style="color:#059569;">đã</span> được chấp nhận.
                            @elseif($request->status === \App\Enums\StatusRequest::Cancel->value)
                                Chúng tôi rất tiếc phải thông báo rằng đơn đăng ký của bạn <span style="color:#a90a07;">không</span> được chấp nhận.<br><br>
                            @endif
                        </p>
                    </td>
                    <td style="width: 50%; padding: 20px;">
                        <img src="{{ $message->embed(public_path('assets/admin/images/logo_vnua.png')) }}" alt="Icon" style="width: 100%; max-width: 260px;">
                    </td>
                </tr>
            </table>
        </td>
    </tr>

    <!-- Image Section -->
    <tr>
        <td style="background-image: url('{{ asset('assets/client/image/vnua6.jpg') }}'); background-size: cover; background-position: center; text-align: center; color: #FFF; padding: 50px 20px;">
            <table style="background-color: #FFFFFF; margin: 20px auto; text-align: center; width: auto;">
                <tr>
                    <td style="padding: 10px 20px;">
                        <img src="{{ $message->embed(public_path('assets/client/image/box-top.png')) }}" alt="Offer Icon" style="width: 100%; max-width: auto; height: 20px">
                        @if($request->status === \App\Enums\StatusRequest::Completed->value)
                            <h3 style="font-size: 26px; color: #059569;">Đơn đăng ký thành công</h3>
                            <p style="font-size: 16px; color: #000;">{{ $completedContent }}</p>
                        @elseif($request->status === \App\Enums\StatusRequest::Cancel->value)
                            <h3 style="font-size: 26px; color: #a90a07;">Đơn đăng ký không thành công</h3>
                            <p style="font-size: 16px; color: #000;">Lý do: {{ $cancelContent }}</p>
                        @endif
                        <p style="font-size: 14px; color: #333;">Nếu bạn cần hỗ trợ, vui lòng liên hệ qua email hoặc số điện thoại của chúng tôi bên dưới.</p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <!-- Footer Section -->
    <tr>
        <td style="text-align: center; font-size: 12px; color: #9B9B9B; padding: 10px 0;">
            <strong>Học viện Nông nghiệp Việt Nam</strong><br>
            Hotline: 0988 888 888 | Email: kytucxa@vnua.edu.vn<br>
            <a href="#" style="color: #1D83A8;">Made in ST Team</a>
        </td>
    </tr>
</table>
</body>
</html>
