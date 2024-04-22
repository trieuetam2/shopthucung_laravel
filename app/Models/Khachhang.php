<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Khachhang extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'khachhang';
    protected $primaryKey = 'id_kh';

    protected $fillable = [
        'hoten', 'email', 'password', 'diachi', 'sdt', 'id_phanquyen'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', // Hide the password field if needed
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_kh' => 'int',
        'sdt' => 'int',
        'id_phanquyen' => 'int',
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;


    // Define any additional relationships or methods as needed...
}
