<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Mark
 * @package App\Models
 * @version December 14, 2020, 2:49 am UTC
 *
 * @property string $name
 * @property string $slug
 * @property string $Description
 */
class Mark extends Model
{
    use SoftDeletes;

    public $table = 'marks';


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
        'slug' => 'required|unique:marks',
        'Description' => 'required'
    ];

    static function listMarks()
    {
        $result = Mark::all()->toArray();
        $array = [];
        foreach ($result as $key => $value) {
            $array [$value['id']]= $value['name'];
        }
        return $array;
    }


}
