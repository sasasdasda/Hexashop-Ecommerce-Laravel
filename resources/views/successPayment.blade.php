<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Success</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .card {
            background-color: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
            text-align: center;
            width: 100%;
            max-width: 400px;
        }
        .card h1 {
            color: #2a2a2a;
            margin-bottom: 20px;
            font-size: 24px;
        }
        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 5px;
            background-color: #dff0d8;
            color: #3c763d;
            font-size: 18px;
        }
        .card .button {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 24px;
            background-color: #2a2a2a;
            color: white;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        .card .button:hover {
            background-color: #1f1f1f;
        }
        @media (max-width: 600px) {
            .card {
                padding: 30px;
                width: 90%;
            }
            .card h1 {
                font-size: 22px;
            }
            .card .button {
                padding: 10px 20px;
                font-size: 14px;
            }
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="card">
        <h1>Payment Successful</h1>
        <div class="alert">
            Thank you for your payment! Your transaction was processed successfully.
        </div>
        <a href="{{ route('products') }}" class="button">Continue Shopping</a>
    </div>
</body>
</html>
