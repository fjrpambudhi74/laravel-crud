<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel CRUD</title>
</head>
<body>
<h2>Data Products</h2>
<br>
<a href="/add">
    <button>Add New</button>
</a>
<table border="1">
    <tr>
        <th>Product</th>
        <th>Description</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Actions</th>
    </tr>

    @foreach ($products as $product)
    <tr>
        <td>{{ $product->product_name }}</td>
        <td>{{ $product->product_description }}</td>
        <td>{{ $product->product_price }}</td>
        <td>{{ $product->product_quantity }}</td>
        <td>
            <a href="/edit/{{ $product->product_id }}">Edit</a>
            <a href="/delete/{{ $product->product_id }}">Delete</a>
        </td>
    </tr>
    @endforeach
</table>
</body>
</html>