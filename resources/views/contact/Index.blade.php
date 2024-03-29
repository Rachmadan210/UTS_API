<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Contacts</title>
</head>
<body>
    <h1>List Contacts</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact['id'] }}</td>
                    <td>{{ $contact['first_name'] }}</td>
                    <td>{{ $contact['last_name'] }}</td>
                    <td>{{ $contact['email'] }}</td>
                    <td>{{ $contact['phone'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>