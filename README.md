## Shop thú cưng Laravel

### Hình minh họa code
<p align="center"><a href="#"><img src="https://github.com/trieuetam2/shopthucung_laravel/blob/main/public/frontend/upload/shop-thu-cung-laravel-hinh-1.PNG" width="100%" alt="shop-thu-cung-laravel-hinh-1.PNG"></a></p>
<h3 align="center">Hình 1</h3>
<p align="center"><a href="#"><img src="https://github.com/trieuetam2/shopthucung_laravel/blob/main/public/frontend/upload/shop-thu-cung-laravel-hinh-2.PNG" width="100%" alt="shop-thu-cung-laravel-hinh-1.PNG"></a></p>

<p align="center"><a href="#"><img src="https://github.com/trieuetam2/shopthucung_laravel/blob/main/public/frontend/upload/shop-thu-cung-laravel-hinh-3.PNG" width="100%" alt="shop-thu-cung-laravel-hinh-1.PNG"></a></p>

<p align="center"><a href="#"><img src="https://github.com/trieuetam2/shopthucung_laravel/blob/main/public/frontend/upload/shop-thu-cung-laravel-hinh-4.PNG" width="100%" alt="shop-thu-cung-laravel-hinh-1.PNG"></a></p>

<p align="center"><a href="#"><img src="https://github.com/trieuetam2/shopthucung_laravel/blob/main/public/frontend/upload/shop-thu-cung-laravel-hinh-5.PNG" width="100%" alt="shop-thu-cung-laravel-hinh-1.PNG"></a></p>

<p align="center"><a href="#"><img src="https://github.com/trieuetam2/shopthucung_laravel/blob/main/public/frontend/upload/shop-thu-cung-laravel-hinh-6.PNG" width="100%" alt="shop-thu-cung-laravel-hinh-1.PNG"></a></p>

<p align="center"><a href="#"><img src="https://github.com/trieuetam2/shopthucung_laravel/blob/main/public/frontend/upload/shop-thu-cung-laravel-hinh-7.PNG" width="100%" alt="shop-thu-cung-laravel-hinh-1.PNG"></a></p>

<p align="center"><a href="#"><img src="https://github.com/trieuetam2/shopthucung_laravel/blob/main/public/frontend/upload/shop-thu-cung-laravel-hinh-8.PNG" width="100%" alt="shop-thu-cung-laravel-hinh-1.PNG"></a></p>

<p align="center"><a href="#"><img src="https://github.com/trieuetam2/shopthucung_laravel/blob/main/public/frontend/upload/shop-thu-cung-laravel-hinh-9.PNG" width="100%" alt="shop-thu-cung-laravel-hinh-1.PNG"></a></p>

<p align="center"><a href="#"><img src="https://github.com/trieuetam2/shopthucung_laravel/blob/main/public/frontend/upload/shop-thu-cung-laravel-hinh-10.PNG" width="100%" alt="shop-thu-cung-laravel-hinh-1.PNG"></a></p>

## Thông tin project
Source code website thương mại điện tử cửa hàng thú cưng Laravel 10 + MySQL
* Sử dụng Laravel 10, thanh toán VNPAY


## *Chức năng

### 1.User
- **Trang người dùng.**
- **Đăng ký tài khoản, đăng nhập người dùng**
- **Tìm kiếm phân trang sản phẩm**
- **Xem thêm sản phẩm**
- **Chi tiết sản phẩm**
- **Giỏ hàng**
- **Xem các đơn hàng đã mua**
- **xem trạng thái sản phẩm, thông tin sản phẩm, khách hàng**
- **Thanh toán COD, Thanh toán online VNPAY**

### 2. Admin
- **Trang quản trị**
- **Đăng nhập admin**
- **Tổng quan (Dashboard)**
- **Quản lý đơn hàng**
- **Quản lý sản phẩm**
- **Quản lý danh mục**
- **Thêm sửa xóa sản phẩm, danh mục CRUD, Search**
- **Thống kê doanh thu tổng quan**

## *Yêu cầu cài đặt :Composer + Xampp.

## Hướng dẫn cài đặt:

Bước 1: Giải nén tập tin .zip vừa tải về.

Bước 2: Mở Xampp start Apache, MySQL

Bước 3: Truy cập localhost/phpmyadmin tạo mới tên Database là larave
import file shopthucung_laravel/larave.sql và bấm chạy

Bước 4: Mở thư mục shopthucung_laravel lên và chạy terminal gõ 2 lệnh sau:

<p>composer install</p>
<p>php artisan key:generate</p>

Bước 5: Chỉnh lại file .env

 -- các thông số dưới sao cho phù hợp với máy --

<p>DB_CONNECTION=mysql  	//kiểu kết nối</p>
<p>DB_HOST=127.0.0.1   	//host truy cập</p>
<p>DB_PORT=3306    	//port mysql</p>
<p>DB_DATABASE=larave 	//tên database</p>
<p>DB_USERNAME=root  	//user</p>
<p>DB_PASSWORD=         	//có pass thì nhập</p>

Bước 6: Cuối cùng chạy lệnh 

<p>php artisan serve</p>

