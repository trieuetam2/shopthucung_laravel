<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int      $id_dathang
 * @property int      $id_kh
 * @property int      $id_dathang
 * @property int      $id_kh
 * @property int      $id_dathang
 * @property int      $id_kh
 * @property int      $tongtien
 * @property int      $tongtien
 * @property int      $tongtien
 * @property string   $madathang
 * @property string   $makh
 * @property string   $madathang
 * @property string   $makh
 * @property string   $madathang
 * @property string   $makh
 * @property string   $trangthai
 * @property string   $giaohang
 * @property string   $trangthai
 * @property string   $trangthai
 * @property string   $giaohang
 * @property DateTime $ngaydathang
 * @property DateTime $ngaydathang
 * @property DateTime $ngaydathang
 */
class Dathang extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'dathang';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id_dathang';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'madathang', 'makh', 'id_kh', 'madathang', 'makh', 'id_kh', 'madathang', 'makh', 'id_kh', 'trangthai', 'tongtien', 'ngaydathang', 'giaohang', 'trangthai', 'tongtien', 'ngaydathang', 'trangthai', 'tongtien', 'ngaydathang', 'giaohang'
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
        'id_dathang' => 'int', 'madathang' => 'string', 'makh' => 'string', 'id_kh' => 'int', 'id_dathang' => 'int', 'madathang' => 'string', 'makh' => 'string', 'id_kh' => 'int', 'id_dathang' => 'int', 'madathang' => 'string', 'makh' => 'string', 'id_kh' => 'int', 'trangthai' => 'string', 'tongtien' => 'int', 'ngaydathang' => 'datetime', 'giaohang' => 'string', 'trangthai' => 'string', 'tongtien' => 'int', 'ngaydathang' => 'datetime', 'trangthai' => 'string', 'tongtien' => 'int', 'ngaydathang' => 'datetime', 'giaohang' => 'string'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'ngaydathang', 'ngaydathang', 'ngaydathang'
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
