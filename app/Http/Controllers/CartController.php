<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Carbon\Carbon;
use App\Models\Sanpham;
use App\Models\Dathang;
use App\Models\ChitietDonhang;

class CartController extends Controller
{
    public function index()
    {
        $products = Sanpham::all();
        return view('products', compact('products'));
    }
 
    public function cart()
    {
        return view('pages.cart');
    }
    public function addToCart($id)
    {
        $product = Sanpham::findOrFail($id);
 
        $cart = session()->get('cart', []);
 
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        }  else {
            $cart[$id] = [
                "id_sanpham" => $product->id_sanpham,
                "tensp" => $product->tensp,
                "anhsp" => $product->anhsp,
                "giasp" => $product->giasp,
                "giamgia" => $product->giamgia,
                "giakhuyenmai" => $product->giakhuyenmai,
                "quantity" => 1
            ];
        }
 
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Thêm vào giỏ hàng thành công!');
    }
    public function addGoToCart($id)
    {
        $product = Sanpham::findOrFail($id);
 
        $cart = session()->get('cart', []);
 
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        }  else {
            $cart[$id] = [
                "id_sanpham" => $product->id_sanpham,
                "tensp" => $product->tensp,
                "anhsp" => $product->anhsp,
                "giasp" => $product->giasp,
                "giamgia" => $product->giamgia,
                "giakhuyenmai" => $product->giakhuyenmai,
                "quantity" => 1
            ];
        }
 
        session()->put('cart', $cart);
        return redirect('/cart');
    }
 
    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cập nhật giỏ hàng thành công!');
        }
    }
 
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Xóa sản phẩm trong giỏ hàng thành công');
        }
    }

    public function checkout(){
        if(Auth::check()){
            if(Auth::user()){
                $showusers = DB::table('khachhang')
                    ->join('dathang', 'khachhang.id_kh', '=', 'dathang.id_kh')
                    ->select('khachhang.*')
                    ->where('khachhang.id_kh', Auth::user()->id_kh)
                    ->get();

                return view('pages.checkout', ['showusers' => $showusers]);
            }
        }
        return redirect('/login');
    }

    public function dathang(Request $request){

        $validatedDataDatHang = $request->validate([
        ]);

        $validatedDataDatHang['ngaydathang'] = Carbon::now();
        $validatedDataDatHang['ngaygiaohang'] = null;
        $validatedDataDatHang['tongtien'] = $request->tongtien;
        $validatedDataDatHang['phuongthucthanhtoan'] = $request->phuongthucthanhtoan;
        $validatedDataDatHang['diachigiaohang'] = $request->diachigiaohang;
        $validatedDataDatHang['trangthai'] = "đang xử lý";
        $validatedDataDatHang['id_kh'] = $request->id_kh;

        $dathangCre = Dathang::create($validatedDataDatHang);


        $validatedDataCTDatHang = $request->validate([
        ]);

        foreach(session('cart') as $item){
            $validatedDataCTDatHang['tensp'] = $item['tensp'];
            $validatedDataCTDatHang['soluong'] = $item['quantity'];
            $validatedDataCTDatHang['giamgia'] = $item['giamgia'];   
            $validatedDataCTDatHang['giatien'] = $item['giasp'];   
            $validatedDataCTDatHang['giakhuyenmai'] = $item['giakhuyenmai'];   
            $validatedDataCTDatHang['id_sanpham'] = $item['id_sanpham'];   
            $validatedDataCTDatHang['id_dathang'] = $dathangCre->id_dathang;            
        
            $validatedDataCTDatHang['id_kh'] = $request->id_kh;   
        
            ChitietDonhang::create($validatedDataCTDatHang);
        }
        

        return view('pages.thongbaodathang');
    }

    public function thongbaodathang(){
        return view('pages.thongbaodathang');
    }
}
