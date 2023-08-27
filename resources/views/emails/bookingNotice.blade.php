<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>User Request Notice</title>
</head>

<body>

    <p>Hello Admin,</p>
    <p>The user with name {{ $mailData['name'] }} and address: {{ $mailData['address'] }} has make a request for pick-up</p>

    <ul>
        <p>Detalis are as follows:</p>
        <li>
            <p>Addres: {{ $mailData['address'] }}</p>
        </li>
        <li>
            <p>Name: {{ $mailData['name'] }}</p>
        </li>
        <li>
            <p>Phone Number: {{ $mailData['phone'] }}</p>
        </li>
        <li>
            <p>Email: {{ $mailData['email'] }}</p>
        </li>
        <li>
            <p>Pick UP Date: {{ $mailData['pick'] }}</p>
        </li>
    </ul>
    <p>If you have any questions or need assistance, feel free to contact our support team.</p>
    <p>Best regards,<br>{{ config('app.name') }}</p>
</body>

</html>
