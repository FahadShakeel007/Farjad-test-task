<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Product
 * @package App\Models
 * @version June 3, 2021, 11:23 am UTC
 *
 * @property string $name
 * @property string $model_no
 * @property integer $brand_id
 */
class Product extends Model
{
    use HasFactory;

    public $table = 'products';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'model_no',
        'brand_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'model_no' => 'string',
        'brand_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:256',
        'model_no' => 'required|string|max:255',
        'brand_id' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];



    public function brand()
    {
        return $this->belongsTo('App\Models\Brand');
    }

    
}
