<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Addresses</title>
</head>
<body>
    <h1>List Addresses</h1>

    <ul>
        @foreach($addresses as $address)
            <li>
                <strong>Street:</strong> {{ $address['street'] }} <br>
                <strong>City:</strong> {{ $address['city'] }} <br>
                <strong>Province:</strong> {{ $address['province'] }} <br>
                <strong>Country:</strong> {{ $address['country'] }} <br>
                <strong>Postal Code:</strong> {{ $address['postal_code'] }}
            </li>
            <br>
        @endforeach
    </ul>
</body>
</html>