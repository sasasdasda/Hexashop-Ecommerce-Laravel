<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Verification Code</title>
    <style>
        /* Reset styles for email compatibility */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        table {
            border-spacing: 0;
            width: 100%;
        }
        td {
            padding: 0;
        }
    </style>
</head>
<body>
    <table width="100%" style="background-color: #f4f4f4; padding: 20px;">
        <tr>
            <td align="center">
                <!-- Main container -->
                <table width="600px" style="background-color: #ffffff; overflow: hidden; border: 1px solid #e0e0e0;">
                    <!-- Header -->
                    <tr>
                        <td style="background-color: #2a2a2a; padding: 20px; text-align: center; color: #ffffff; font-size: 24px; font-weight: bold;">
                            Your Verification Code
                        </td>
                    </tr>
                    <!-- Body -->
                    <tr>
                        <td style="padding: 20px; font-size: 16px; color: #2a2a2a;">
                            <p>Dear {{ $data['email'] }},</p>
                            <p>Enter this code in our website to activate your customer portal account Use the code below to verify your identity:</p>
                            <div style="text-align: center; margin: 20px 0; padding: 10px; font-size: 28px; font-weight: bold; color: #2a2a2a; border: 1px dashed #2a2a2a;">
                                {{ $data['code'] }}
                            </div>
                            <p>This code will expire in 10 minutes. If you didn’t request this, please ignore this email or contact support immediately at <a href="mailto:support@yourwebsite.com" style="color: #2a2a2a; text-decoration: none;">support@Hexashop.com</a>.</p>
                        </td>
                    </tr>
                    <!-- Footer -->
                    <tr>
                        <td style="background-color: #f4f4f4; padding: 10px; text-align: center; font-size: 12px; color: #777777;">
                            © 2024 Hexashop.com All rights reserved.
                            <br>
                            <a href="[Unsubscribe URL]" style="color: #2a2a2a; text-decoration: none;">Unsubscribe</a>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
