<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Palette
 * @package App\Models
 * @version June 17, 2020, 3:53 pm UTC
 *
 * @property string $name
 * @property string $img
 * @property integer $palette_copies
 * @property integer $avalible_copies
 * @property integer $S_copies
 * @property integer $S_avalible
 * @property string $S_price
 * @property integer $M_copies
 * @property integer $M_avalible
 * @property string $M_price
 * @property integer $L_copies
 * @property integer $L_avalible
 * @property string $L_price
 * @property string $sizing_details
 * @property string $print_material
 * @property string $print_ink
 * @property string $print_finish
 * @property string $frame_material
 * @property string $frame_finish
 */
class Palette extends Model
{
    use SoftDeletes;

    public $table = 'palettes';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'img',
        'palette_copies',
        'avalible_copies',
        'S_copies',
        'S_avalible',
        'S_price',
        'M_copies',
        'M_avalible',
        'M_price',
        'L_copies',
        'L_avalible',
        'L_price',
        'sizing_details',
        'print_material',
        'print_ink',
        'print_finish',
        'frame_material',
        'frame_finish'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'img' => 'string',
        'palette_copies' => 'integer',
        'avalible_copies' => 'integer',
        'S_copies' => 'integer',
        'S_avalible' => 'integer',
        'S_price' => 'string',
        'M_copies' => 'integer',
        'M_avalible' => 'integer',
        'M_price' => 'string',
        'L_copies' => 'integer',
        'L_avalible' => 'integer',
        'L_price' => 'string',
        'sizing_details' => 'string',
        'print_material' => 'string',
        'print_ink' => 'string',
        'print_finish' => 'string',
        'frame_material' => 'string',
        'frame_finish' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
