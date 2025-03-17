<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
</head>
<body>
    <div style="text-align: center; margin-top: 20%;">
        <h1>Welcome to Laravel</h1>
        <p>Click the button below to proceed to registration.</p>
        <a href="{{ url('pendaftaran') }}" style="padding: 10px 20px; background-color: blue; color: white; text-decoration: none; border-radius: 5px;">Go to Registration</a>
    </div>
</body>
</html>