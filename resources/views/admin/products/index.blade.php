@extends('admin_layout')
@section('admin_content')
<h1 class="h3 mb-3"><strong>Danh sách sản phẩm</strong></h1>

<div class="">
    @if(session()->has('success'))
        <div class="alert alert-success mb-3" role="alert">
            {{session('success')}}
        </div>
    @endif
</div>

<a class="btn btn-primary" href="{{route('product.create')}}">Thêm sản phẩm</a>

<table class="table">
<thead>
  <tr>
    <th>Tên sp</th>
    <th>Hình</th>
    <th>Số lượng</th>
    <th>giá</th>
    <th colspan="2">Actions</th>
  </tr>
</thead>
<tbody>
  @foreach($products as $product)
  <tr>
    <td>{{$product->tensp}}</td>
    <td><img src="{{ asset($product->anhsp)}}" width="120" height="120" alt=""></td>
    <td>{{$product->soluong}}</td>
    <td>{{$product->giasp}}</td>
    <td colspan="2">
        <a href="{{ route('product.edit', ['product' => $product]) }}" class="btn btn-warning mb-2">edit</a>
        <form method="post" action="{{route('product.destroy', ['product' => $product])}}">
            @csrf
            @method('delete')
            <input type="submit" class="btn btn-danger" value="Delete"
            onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này không?')">
        </form>
    </td>
  </tr>
  @endforeach
</tbody>
</table>
<nav aria-label="Page navigation example">
  <ul class="pagination">
      <li class="page-item @if($products->currentPage() === 1) disabled @endif">
          <a class="page-link" href="{{ $products->previousPageUrl() }}">Previous</a>
      </li>
      @for ($i = 1; $i <= $products->lastPage(); $i++)
          <li class="page-item @if($products->currentPage() === $i) active @endif">
              <a class="page-link" href="{{ $products->url($i) }}">{{ $i }}</a>
          </li>
      @endfor
      <li class="page-item @if($products->currentPage() === $products->lastPage()) disabled @endif">
          <a class="page-link" href="{{ $products->nextPageUrl() }}">Next</a>
      </li>
  </ul>
</nav>
@endsection