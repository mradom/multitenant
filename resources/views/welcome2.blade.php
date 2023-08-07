<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laraveleando!</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #262626;
            color: #f2f2f2;
        }
        .landing-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }
        .title {
            font-size: 48px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #007bff;
        }
        .subtitle {
            font-size: 24px;
            margin-bottom: 40px;
            color: #ffffff;
        }
        .cta-button {
            padding: 12px 28px;
            font-size: 18px;
            font-weight: bold;
            color: #f2f2f2;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .cta-button:hover {
            background-color: #0056b3;
        }
        .footer {
            text-align: center;
            padding: 10px;
            background-color: #1c1c1c;
            color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="landing-container">
        <div class="title">Laraveleando!</div>
        <div class="subtitle">Welcome to our Laravel site</div>
        <button class="cta-button">Get Started</button>
    </div>
    <div class="footer">
        &copy; 2023 Laraveleando! All rights reserved.
    </div>
</body>
</html>
