<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>danhmuc</h1>

    <div class="">
        @if(session()->has('success'))
            <div class="" style="color: green;">
                {{session('success')}}
            </div>
        @endif
    </div>
    
    <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>ten danh muc</th>
      </tr>
    </thead>
    <tbody>
      @foreach($Danhmucs as $danhmuc)
      <tr>
        <td>{{$danhmuc->id_danhmuc}}</td>
        <td>{{$danhmuc->ten_danhmuc}}</td>
        
      </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>