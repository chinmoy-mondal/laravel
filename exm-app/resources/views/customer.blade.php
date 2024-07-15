<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>customer page blade page</p>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>product</th>
                <th>quantity</th>
            </tr>
        </thead>
        <tbody>





                    @foreach($customer->orders as $order)
                <tr>

                    <td>{{ $customer['id'] }}</td>
                    <td>{{ $customer['name'] }}</td>
                    <td>{{ $customer['email'] }}</td>
                    <td>{{ $order->product }}</td>
                    <td>{{ $order->quantity }}</td>
                </tr>
                    
                    @endforeach
        </tbody>
    </table>
</body>
</html>