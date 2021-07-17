<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class UserDetail
 * @package App\Models
 * @version July 17, 2021, 1:05 pm UTC
 *
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $gender
 * @property integer $phone_no
 * @property string $status
 */
class UserDetail extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'user_details';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'email',
        'password',
        'gender',
        'phone_no',
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
        'password' => 'string',
        'gender' => 'string',
        'phone_no' => 'integer',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'email' => 'required unique',
        'password' => 'required',
        'gender' => 'required',
        'phone_no' => 'required number'
    ];

    
}
