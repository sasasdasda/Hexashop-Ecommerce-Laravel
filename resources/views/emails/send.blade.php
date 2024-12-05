<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Sent</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }
        .container {
            text-align: center;
            background: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 400px;
        }
        .container a {
            display: inline-block;
            background-color: #5e60ce;
            color: #fff;
            text-decoration: none;
            padding: 12px 20px;
            border-radius: 4px;
            font-size: 16px;
            margin-top: 10px;
            transition: background-color 0.3s ease;
        }
        .container h1 {
            font-size: 24px;
            color: #5e60ce;
            margin-bottom: 16px;
        }
        .container p {
            font-size: 16px;
            color: #666;
            margin-bottom: 24px;
        }
        .container .email {
            font-weight: bold;
            color: #333;
        }
        .container button {
            background-color: #5e60ce;
            color: #fff;
            border: none;
            padding: 12px 20px;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .container button:hover {
            background-color: #4c51bf;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Email Sent!</h1>
        <p>We sent an email to <span class="email">{{ $email }}</span>. Please check your inbox to proceed further.</p>
        <button onclick="window.location.href='{{ route('verfiy.code') }}' ">Verify Email</button>
        <a href="https://mail.google.com/" target="_blank">Go to Gmail</a>

    </div>
</body>
</html>
