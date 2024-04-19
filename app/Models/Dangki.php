<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $id_dangki
 * @property int    $id_dangki
 * @property int    $id_dangki
 * @property int    $id_phanquyen
 * @property int    $id_phanquyen
 * @property int    $id_phanquyen
 * @property string $hoten
 * @property string $email
 * @property string $matkhau
 * @property string $hoten
 * @property string $email
 * @property string $matkhau
 * @property string $hoten
 * @property string $email
 * @property string $matkhau
 */
class Dangki extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'dangki';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id_dangki';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'hoten', 'email', 'matkhau', 'id_phanquyen', 'hoten', 'email', 'matkhau', 'id_phanquyen', 'hoten', 'email', 'matkhau', 'id_phanquyen'
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
        'id_dangki' => 'int', 'id_dangki' => 'int', 'id_dangki' => 'int', 'hoten' => 'string', 'email' => 'string', 'matkhau' => 'string', 'id_phanquyen' => 'int', 'hoten' => 'string', 'email' => 'string', 'matkhau' => 'string', 'id_phanquyen' => 'int', 'hoten' => 'string', 'email' => 'string', 'matkhau' => 'string', 'id_phanquyen' => 'int'
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
