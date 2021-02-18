<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Permissions
 * @package App\Models
 * @version July 6, 2020, 1:19 am UTC
 *
 * @property string $name
 * @property string $slug
 * @property string $Description
 */
class Permissions extends Model
{
    use SoftDeletes;

    public $table = 'permissions';


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

    ];

    public function roles()
    {
        return $this->belongsToMany('App\Models\Roles')->withTimesTamps();
    }
    static function ListPermissions()
    {
       $result = Permissions::all()->toArray();
    //    $array = [];
    //    foreach ($result as $key => $value) {
    //         $array [$value['id']]= $value['name'];
    //    }
       return $result;
    }
}
