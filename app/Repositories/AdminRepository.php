<?php
namespace App\Repositories;

use App\Repositories\IAdminRepository;
use App\Http\Requests;

use App\Models\Khachhang;
use Illuminate\Support\Facades\Auth;

class AdminRepository implements IAdminRepository{

    public function signIn($data){
        // $admin_email = $data->admin_email;
        // $admin_password = md5($data->admin_password);
        
        // // Use the Khachhang model to perform the query
        // $result = DB::table('khachhang')->where('email', $admin_email)
        //         ->where('password', $admin_password)->where('id_phanquyen', 1)->first();

        // if ($result) {
        //     Session::put('admin_name', $result->hoten);
        //     Session::put('admin_id', $result->id_kh);
        //     return Redirect::to('/dashboard');
        // }
        // else{
        //     Session::put('thongbao', 'Tài khoản hoặc mật khẩu không chính xác!');
        //     return Redirect::to('/admin');
        // }  

        $credetials = [
            'email' => $data->email,
            'password' => $data->password
        ];

        if(Auth::attempt($credetials)){
            return redirect('/dashboard');
        }

        return back()->with('thongbao', 'Sai tên tài khoản hoặc mật khẩu');

    }
    public function logOut(){
        Auth::logout();
        return redirect('/admin');
    }

}
