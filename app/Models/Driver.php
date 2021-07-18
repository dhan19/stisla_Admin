<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Driver
 * @package App\Models
 * @version July 17, 2021, 1:10 pm UTC
 *
 * @property string $name
 * @property string $email
 * @property string $vehicle_no
 * @property string $vehicle_type
 * @property string $address
 * @property string $driving_license
 * @property string $image
 * @property string $status
 */
class Driver extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'drivers';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'email',
        'vehicle_no',
        'vehicle_type',
        'address',
        'driving_license',
        'image',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'email' => 'string',
        'vehicle_no' => 'string',
        'vehicle_type' => 'string',
        'address' => 'string',
        'driving_license' => 'string',
        'image' => 'string',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'email' => 'required',
        'vehicle_no' => 'required',
        'vehicle_type' => 'required'
    ];

    
}
