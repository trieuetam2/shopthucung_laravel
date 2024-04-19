<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $makh
 * @property string $makh
 * @property string $makh
 * @property string $tenkh
 * @property string $diachi
 * @property string $email
 * @property string $tenkh
 * @property string $diachi
 * @property string $email
 * @property string $tenkh
 * @property string $diachi
 * @property string $email
 * @property int    $id_kh
 * @property int    $id_kh
 * @property int    $id_kh
 * @property int    $sdt
 * @property int    $sdt
 * @property int    $sdt
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
    protected $primaryKey = 'makh';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_kh', 'id_kh', 'id_kh', 'tenkh', 'diachi', 'email', 'sdt', 'tenkh', 'diachi', 'email', 'sdt', 'tenkh', 'diachi', 'email', 'sdt'
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
        'makh' => 'string', 'id_kh' => 'int', 'makh' => 'string', 'id_kh' => 'int', 'makh' => 'string', 'id_kh' => 'int', 'tenkh' => 'string', 'diachi' => 'string', 'email' => 'string', 'sdt' => 'int', 'tenkh' => 'string', 'diachi' => 'string', 'email' => 'string', 'sdt' => 'int', 'tenkh' => 'string', 'diachi' => 'string', 'email' => 'string', 'sdt' => 'int'
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
