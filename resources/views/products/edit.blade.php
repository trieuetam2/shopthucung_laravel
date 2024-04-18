<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>edit</h1>

    <div class="err">
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>


    <form method="POST" action="{{ route('product.update', ['product' => $product->id]) }}">
        @csrf
        @method('put')
        <div>
            <input type="text" name="name" value="{{$product->name}}">
        </div>

        <div>
            <input type="text" name="qty" value="{{$product->qty}}">
        </div>

        <div>
            <input type="number" name="price" value="{{$product->price}}">
        </div>

        <div>
            <input type="text" name="mota" value="{{$product->mota}}">
        </div>

        <div>
            <input type="submit" value="Update">
        </div>
    </form>
</body>
</html>
