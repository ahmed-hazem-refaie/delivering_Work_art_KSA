<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Paletteimage
 * @package App\Models
 * @version June 21, 2020, 1:05 pm UTC
 *
 * @property string $img
 * @property integer $palatte_id
 */
class Paletteimage extends Model
{
    use SoftDeletes;

    public $table = 'paletteimages';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'img',
        'palatte_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'img' => 'string',
        'palatte_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
