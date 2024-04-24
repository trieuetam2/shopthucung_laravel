<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int      $id_ctdonhang
 * @property int      $id_ctdonhang
 * @property int      $id_sanpham
 * @property int      $id_dathang
 * @property int      $id_kh
 * @property int      $id_ctdonhang
 * @property int      $id_sanpham
 * @property int      $id_dathang
 * @property int      $id_kh
 * @property int      $id_ctdonhang
 * @property int      $id_sanpham
 * @property int      $id_dathang
 * @property int      $id_kh
 * @property int      $soluong
 * @property int      $giamgia
 * @property int      $giatien
 * @property int      $tongtien
 * @property int      $id_sanpham
 * @property int      $id_dathang
 * @property int      $id_kh
 * @property int      $soluong
 * @property int      $giamgia
 * @property int      $giatien
 * @property int      $tongtien
 * @property int      $soluong
 * @property int      $giamgia
 * @property int      $giatien
 * @property int      $tongtien
 * @property int      $soluong
 * @property int      $giamgia
 * @property int      $giatien
 * @property int      $tongtien
 * @property string   $madathang
 * @property string   $makh
 * @property string   $madathang
 * @property string   $makh
 * @property string   $tensp
 * @property string   $tensp
 * @property string   $trangthai
 * @property string   $tensp
 * @property string   $trangthai
 * @property string   $tensp
 * @property DateTime $ngaydat
 * @property DateTime $ngaydat
 */
class ChitietDonhang extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'chitiet_donhang';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id_ctdonhang';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'madathang', 'makh', 'id_sanpham', 'id_dathang', 'id_kh', 'madathang', 'makh', 'id_sanpham', 'id_dathang', 'id_kh', 'id_sanpham', 'id_dathang', 'id_kh', 'tensp', 'soluong', 'giamgia', 'giatien', 'giakhuyenmai', 'tongtien', 'id_sanpham', 'id_dathang', 'id_kh', 'tensp', 'soluong', 'giamgia', 'giatien', 'tongtien', 'trangthai', 'ngaydat', 'tensp', 'soluong', 'giamgia', 'giatien', 'tongtien', 'trangthai', 'ngaydat', 'tensp', 'soluong', 'giamgia', 'giatien', 'tongtien'
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
        'id_ctdonhang' => 'int', 'id_ctdonhang' => 'int', 'madathang' => 'string', 'makh' => 'string', 'id_sanpham' => 'int', 'id_dathang' => 'int', 'id_kh' => 'int', 'id_ctdonhang' => 'int', 'madathang' => 'string', 'makh' => 'string', 'id_sanpham' => 'int', 'id_dathang' => 'int', 'id_kh' => 'int', 'id_ctdonhang' => 'int', 'id_sanpham' => 'int', 'id_dathang' => 'int', 'id_kh' => 'int', 'tensp' => 'string', 'soluong' => 'int', 'giamgia' => 'int', 'giatien' => 'int','giakhuyenmai' => 'int', 'tongtien' => 'int', 'id_sanpham' => 'int', 'id_dathang' => 'int', 'id_kh' => 'int', 'tensp' => 'string', 'soluong' => 'int', 'giamgia' => 'int', 'giatien' => 'int', 'tongtien' => 'int', 'trangthai' => 'string', 'ngaydat' => 'datetime', 'tensp' => 'string', 'soluong' => 'int', 'giamgia' => 'int', 'giatien' => 'int', 'tongtien' => 'int', 'trangthai' => 'string', 'ngaydat' => 'datetime', 'tensp' => 'string', 'soluong' => 'int', 'giamgia' => 'int', 'giatien' => 'int', 'tongtien' => 'int'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'ngaydat', 'ngaydat'
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
