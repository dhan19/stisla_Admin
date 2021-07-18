<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Truck
 * @package App\Models
 * @version July 17, 2021, 12:58 pm UTC
 *
 * @property string $payload
 * @property string $cargobox
 * @property string $type
 * @property string $driver
 * @property number $vehicle
 * @property string $images
 */
class Truck extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'trucks';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'payload',
        'cargobox',
        'type',
        'driver',
        'vehicle',
        'images'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'payload' => 'string',
        'cargobox' => 'string',
        'type' => 'string',
        'driver' => 'string',
        'images' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        // 'payload' => 'required',
        // 'cargobox' => 'required',
        // 'type' => 'required',
        // 'driver' => 'required',
        // 'vehicle' => 'required',
        // 'images' => 'required'
    ];

    
}
