<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Category
 * @package App\Models
 * @version December 14, 2020, 1:34 am UTC
 *
 * @property string $name
 * @property string $slug
 * @property string $Description
 */
class Category extends Model
{
    use SoftDeletes;

    public $table = 'categories';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'slug',
        'Description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'slug' => 'string',
        'Description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'slug' => 'required|unique:categories',
        'Description' => 'required'
    ];

    static function listCategories()
    {
        $result = Category::all()->toArray();
        $array = [];
        foreach ($result as $key => $value) {
            $array [$value['id']]= $value['name'];
        }
        return $array;
    }

}
