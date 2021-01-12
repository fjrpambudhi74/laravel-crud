<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel CRUD</title>
</head>
<body>
    <h2>Edit Product</h2>
    <a href="/">
        <button>Back</button>
    </a>
    <br>

    @foreach ($products as $product)
    <form action="/store" method="post">
        {{-- form protection to generete token--}}
        {{ csrf_field() }}
        <div class="form-group">
            <label for="">Product ID</label>
            <input type="hidden" name="id" value="{{ $product->product_id }}" required="required" class="form-controls">
        </div>
        <div class="form-group">
            <label for="">Product Name</label>
            <input type="text" name="product" value="{{ $product->product_name }}" required="required" class="form-controls">
        </div>
        <div class="form-group">
            <label for="">Description</label>
            {{-- <textarea type="text" name="product" required="required" class="form-controls"> --}}
                <textarea name="description" value="{{ $product->product_description }}"  cols="10" rows="10"></textarea>
            </div>
            <div class="form-group">
                <label for="">Price</label>
                <input type="number" name="price" value="{{ $product->product_price }}" required="required" class="form-controls">
            </div>
            <div class="form-group">
                <label for="">Quantity</label>
                <input type="number" name="quantity" value="{{ $product->product_quantity }}" required="required" class="form-controls">
            </div>
        </form>
        @endforeach
</body>
</html>