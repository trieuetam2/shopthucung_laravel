@extends('layout')
@section('content')
<div class="body">
    <h1 class="h3 mb-3"><strong>Xem đơn hàng</strong></h1>

    <div class="err">
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>

    @foreach ($showusers as $showuser)
        <div class="mb-3">
        <div style="font-size: 18px;"><strong>Khách hàng:</strong> {{$showuser->hoten}}</div>
        <div style="font-size: 18px;"><strong>Email:</strong> {{$showuser->email}}</div>
        <div style="font-size: 18px;"><strong>Số điện thoại:</strong> {{$showuser->sdt}}</div>
        <div style="font-size: 18px;"><strong>Địa chỉ:</strong> {{$showuser->diachi}}</div>
        </div>
    @endforeach

    <div class="mb-3">
        <table class="table">
            <tbody>
                <tr>
                    <th>ID đơn hàng</th>
                    <td>{{$order->id_dathang}}</td>
                </tr>
                <tr>
                    <th>Ngày đặt</th>
                    <td>{{$order->ngaydathang}}</td>
                </tr>
                <tr>
                    <th>Ngày giao</th>
                    <td>
                        @if($order->ngaygiaohang)
                            {{ date('Y-m-d', strtotime($order->ngaygiaohang)) }}
                        @else
                            {{ date('Y-m-d') }}
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>Phương thức thanh toán</th>
                    @if ($order->phuongthucthanhtoan == "COD")
                        <td class="d-none d-xl-table-cell"><div class="badge bg-primary text-white">{{$order->phuongthucthanhtoan}}</div></td>
                    @elseif ($order->phuongthucthanhtoan == "MOMO")
                        <td class="d-none d-xl-table-cell"><div class="badge bg-danger text-white">{{$order->phuongthucthanhtoan}}</div></td>
                    @else
                    <td class="d-none d-xl-table-cell">{{$order->phuongthucthanhtoan}}</td>
                    @endif
                </tr>
                <tr>
                    <th>Địa chỉ giao hàng</th>
                    <td>{{$order->diachigiaohang}}</td>
                </tr>
                <tr>
                    <th>Trạng thái</th>
                    <td>
                        @if($order->trangthai == 'đang xử lý')
                        <span class="badge bg-primary text-white">{{$order->trangthai}}</span>
                      @elseif ($order->trangthai == 'chờ lấy hàng')
                        <span class="badge bg-warning text-white">{{$order->trangthai}}</span>
                      @elseif ($order->trangthai == 'đang giao hàng')
                        <span class="badge bg-success text-white">{{$order->trangthai}}</span>
                      @elseif ($order->trangthai == 'giao thành công')  
                        <span class="badge bg-success text-white">{{$order->trangthai}}</span>
                      @else
                        <span class="badge bg-danger text-white">{{$order->trangthai}}</span>
                      @endif    
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    
    
    <div class="mb-3">
        <table class="table table-hover my-0">
            <thead>
                <th>Tên sản phẩm</th>
                <th>Số lượng</th>
                <th>Giá gốc</th>
                <th>Giảm giá</th>
                <th>Giá khuyến mại</th>
                <th>tổng tiền</th>
            </thead>
            <tbody>
                @php
                    $totalPrice = 0; // Khởi tạo biến tổng tiền
                @endphp
                @foreach ($orderdetails as $orderdetail)
                    <tr>
                        <td>{{$orderdetail->tensp}}</td>
                        <td>{{$orderdetail->soluong}}</td>
                        <td>{{$orderdetail->giatien}}</td>
                        <td>{{$orderdetail->giamgia}}%</td>
                        <td>{{$orderdetail->giakhuyenmai}}</td>
                        <td>{{$orderdetail->tongtien}}</td>
                    </tr>

                    @php
                        $totalPrice += $orderdetail->tongtien; // Cộng giá trị tổng tiền
                    @endphp

                @endforeach

            </tbody>
        </table>
    </div>

    <div class="mb-3">
        <label for="tongiten" class="form-label">Tiền ước tính</label>
        <input type="text" class="form-control" id="tongiten" name="tongiten" value="{{$totalPrice}}" disabled>
    </div>

    &nbsp;<a class="btn btn-secondary" href="{{URL::to('/donhang')}}">Quay lại</a>
</div>
@endsection