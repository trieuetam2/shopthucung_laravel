<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Product</h1>

    <div class="">
        @if(session()->has('success'))
            <div class="" style="color: green;">
                {{session('success')}}
            </div>
        @endif
    </div>

    <h2><a href="{{route('product.create')}}">Create new product</a></h2>  

    <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Qty</th>
        <th>Price</th>
        <th>Mota</th>
        <th>Eit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      @foreach($products as $product)
      <tr>
        <td>{{$product->id}}</td>
        <td>{{$product->name}}</td>
        <td>{{$product->qty}}</td>
        <td>{{$product->price}}</td>
        <td>{{$product->mota}}</td>
        <td>
            <a href="{{ route('product.edit', ['product' => $product]) }}">edit</a>
        </td>
        <td>
            <form method="post" action="{{route('product.destroy', ['product' => $product])}}">
                @csrf
                @method('delete')
                <input type="submit" value="Delete">
            </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>