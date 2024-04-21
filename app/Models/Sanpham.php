<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $id_sanpham
 * @property int    $id_sanpham
 * @property int    $id_sanpham
 * @property int    $id_sanpham
 * @property int    $giasp
 * @property int    $id_danhmuc
 * @property int    $giasp
 * @property int    $id_danhmuc
 * @property int    $giasp
 * @property int    $id_danhmuc
 * @property int    $giasp
 * @property int    $id_danhmuc
 * @property string $tensp
 * @property string $anhsp
 * @property string $mota
 * @property string $tensp
 * @property string $anhsp
 * @property string $mota
 * @property string $tensp
 * @property string $anhsp
 * @property string $mota
 * @property string $tensp
 * @property string $anhsp
 * @property string $mota
 */
class Sanpham extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'sanpham';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id_sanpham';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tensp', 'anhsp', 'giasp', 'mota', 'giamgia', 'id_danhmuc', 'tensp', 'anhsp', 'giasp', 'mota', 'id_danhmuc', 'tensp', 'anhsp', 'giasp', 'mota', 'discount', 'id_danhmuc', 'tensp', 'anhsp', 'giasp', 'mota', 'giamgia', 'id_danhmuc'
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
        'id_sanpham' => 'int', 'id_sanpham' => 'int', 'id_sanpham' => 'int', 'id_sanpham' => 'int', 'tensp' => 'string', 'anhsp' => 'string', 'giasp' => 'int', 'mota' => 'string', 'id_danhmuc' => 'int', 'tensp' => 'string', 'anhsp' => 'string', 'giasp' => 'int', 'mota' => 'string', 'id_danhmuc' => 'int', 'tensp' => 'string', 'anhsp' => 'string', 'giasp' => 'int', 'mota' => 'string', 'id_danhmuc' => 'int', 'tensp' => 'string', 'anhsp' => 'string', 'giasp' => 'int', 'mota' => 'string', 'id_danhmuc' => 'int'
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
