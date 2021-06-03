<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Brand
 * @package App\Models
 * @version June 3, 2021, 11:13 am UTC
 *
 * @property string $name
 * @property string $website
 */
class Brand extends Model
{
    use HasFactory;

    public $table = 'brands';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    //protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'website'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'website' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:256',
        'website' => 'nullable|string|max:256',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function product()
    {
        return $this->hasMany('App\Models\Product');
    }
    
}
