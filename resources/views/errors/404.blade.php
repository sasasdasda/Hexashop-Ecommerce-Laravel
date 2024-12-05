<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Not Found</title>
    <style>
        /* Basic Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f0f0f0;
            color: #333;
            margin: 0;
        }

        /* 404 Page Container */
        .container {
            text-align: center;
            max-width: 600px;
            width: 90%;
            padding: 2rem;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        /* Error Code */
        .error-code {
            font-size: 6rem;
            font-weight: bold;
            color: #2a2a2a;
            margin-bottom: 0.5rem;
        }

        /* Message Header */
        .message-header {
            font-size: 2rem;
            color: #ff6b6b;
            margin-bottom: 1rem;
        }

        /* Message Text */
        .message-text {
            font-size: 1.2rem;
            color: #666;
            margin-bottom: 2rem;
        }

        /* Link Button */
        .link-button {
            display: inline-block;
            padding: 0.8rem 1.5rem;
            background-color: #2a2a2a;
            color: #fff;
            border-radius: 5px;
            font-size: 1rem;
            text-decoration: none;
            transition: background-color 0.4s ease, transform 0.4s ease;
        }
        .link-button:hover {
            background-color: #ff6b6b;
            transform: scale(1.05);
        }

        /* Footer Text */
        .footer {
            margin-top: 2rem;
            font-size: 0.9rem;
            color: #aaa;
        }

        /* Responsive Design */
        @media (max-width: 600px) {
            .error-code {
                font-size: 4rem;
            }
            .message-header {
                font-size: 1.5rem;
            }
            .message-text {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="error-code">404</div>
        <h1 class="message-header">SORRY!</h1>
        <p class="message-text">The page you’re looking for was not found.</p>
        <a href="{{ route("home") }}" class="link-button">Back to Home</a>
        <p class="footer">Copyright © 2020 All rights reserved.</p>
    </div>
</body>
</html>
