<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter Verification Code</title>
    <style>
        /* General styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #ffffff;
            border: 1px solid #e0e0e0;
            padding: 20px 30px;
            width: 400px;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .container h1 {
            font-size: 24px;
            color: #2a2a2a;
            margin-bottom: 20px;
        }

        .container p {
            font-size: 14px;
            color: #666666;
            margin-bottom: 20px;
        }

        .input-code {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #cccccc;
            border-radius: 4px;
            margin-bottom: 20px;
        }

        .btn-submit {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            color: #ffffff;
            background-color: #2a2a2a;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }

        .btn-submit:hover {
            background-color: #444444;
        }

        .error-message {
            color: #fff;
            background: #dd3939;
            padding: 10px 20px;
            font-size: 14px;
            margin-bottom: 10px;
            display: none;
        }
        .error-message-2 {
            color: #fff;
            background: #dd3939;
            padding: 10px 20px;
            font-size: 14px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Enter Your Code</h1>
        <p>Please enter the 6-digit verification code sent to your email:</p>
        <form id="verificationForms" action="{{ route('verfiy.code.submit') }}" method="post">
            @csrf
            <input type="text" id="codeInput" name="code" class="input-code" placeholder="Enter code" maxlength="9" required>
            <span class="error-message" id="errorMessage">Please enter a valid 6-digit code.</span>
            <span class="error-message" id="errorMessage">Please enter a valid 6-digit code.</span>
            @if (session('error'))
                <div class="error-message-2">
                    {{ session('error') }}
                </div>
            @endif
            <button type="submit" class="btn-submit">Verify</button>
        </form>
    </div>

    <script>
        const form = document.getElementById('verificationForm');
        const codeInput = document.getElementById('codeInput');
        const errorMessage = document.getElementById('errorMessage');

        form.addEventListener('submit', (event) => {
            event.preventDefault();

            // Simple validation: Check if code is 6 digits
            const code = codeInput.value.trim();
            if (/^\d{6}$/.test(code)) {
                errorMessage.style.display = 'none';
                // alert('Code verified successfully!');
                // Proceed with backend verification here
            } else {
                errorMessage.style.display = 'block';
            }
        });
    </script>
</body>
</html>
