<!DOCTYPE html>
<html>
<head>
    <title>Formulaire de contact</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: auto;
        }
        h1 {
            color: #333333;
        }
        p {
            color: #555555;
        }
        .footer {
            margin-top: 20px;
            font-size: 12px;
            color: #aaaaaa;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>{{ $data['subject'] }}</h1>
        <p><strong>Nom:</strong> {{ $data['name'] }}</p>
        <p><strong>Email:</strong> {{ $data['email'] }}</p>
        <p><strong>Message:</strong> {{ $data['message'] }}</p>
    </div>
</body>
</html>
