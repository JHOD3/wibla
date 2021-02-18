<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Roles
 * @package App\Models
 * @version July 5, 2020, 6:39 pm UTC
 *
 * @property string $name
 * @property string $slug
 * @property string $Description
 * @property string $full-access
 */
class Roles extends Model
{
    use SoftDeletes;

    public $table = 'roles';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'slug',
        'Description',
        'full_access'
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
        'Description' => 'string',
        'full_access' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|unique:roles,name,',
        'slug' => 'required|string|unique:roles,slug,'
    ];

    public function users()
    {
        return $this->belongsToMany('App\User')->withTimesTamps();
    }

    public function permissions()
    {
        return $this->belongsToMany('App\Models\Permissions')->withTimesTamps();
    }
    static function ListRoles()
    {
       $result = Roles::all()->toArray();
       $array = [];
       foreach ($result as $key => $value) {
            $array [$value['id']]= $value['name'];
       }
       return $array;
    }

}
