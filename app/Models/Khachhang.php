<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $id_kh
 * @property int    $id_kh
 * @property int    $id_kh
 * @property int    $id_kh
 * @property int    $sdt
 * @property int    $id_phanquyen
 * @property int    $sdt
 * @property int    $sdt
 * @property int    $sdt
 * @property int    $id_phanquyen
 * @property string $makh
 * @property string $makh
 * @property string $hoten
 * @property string $email
 * @property string $matkhau
 * @property string $diachi
 * @property string $tenkh
 * @property string $diachi
 * @property string $email
 * @property string $tenkh
 * @property string $diachi
 * @property string $email
 * @property string $hoten
 * @property string $email
 * @property string $matkhau
 * @property string $diachi
 */
class Khachhang extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'khachhang';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id_kh';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'makh', 'makh', 'hoten', 'email', 'matkhau', 'diachi', 'sdt', 'id_phanquyen', 'tenkh', 'diachi', 'email', 'sdt', 'tenkh', 'diachi', 'email', 'sdt', 'hoten', 'email', 'matkhau', 'diachi', 'sdt', 'id_phanquyen'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_kh' => 'int', 'makh' => 'string', 'id_kh' => 'int', 'makh' => 'string', 'id_kh' => 'int', 'id_kh' => 'int', 'hoten' => 'string', 'email' => 'string', 'matkhau' => 'string', 'diachi' => 'string', 'sdt' => 'int', 'id_phanquyen' => 'int', 'tenkh' => 'string', 'diachi' => 'string', 'email' => 'string', 'sdt' => 'int', 'tenkh' => 'string', 'diachi' => 'string', 'email' => 'string', 'sdt' => 'int', 'hoten' => 'string', 'email' => 'string', 'matkhau' => 'string', 'diachi' => 'string', 'sdt' => 'int', 'id_phanquyen' => 'int'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var boolean
     */
    public $timestamps = false;

    // Scopes...

    // Functions ...

    // Relations ...
}
