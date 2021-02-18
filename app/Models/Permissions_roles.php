<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Permissions_roles
 * @package App\Models
 * @version July 6, 2020, 1:24 am UTC
 *
 * @property \App\Models\roles $roles
 * @property \App\Models\permissions $permissions
 * @property integer $roles_id
 * @property integer $permissions_id
 */
class Permissions_roles extends Model
{
    use SoftDeletes;

    public $table = 'permissions_roles';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'roles_id',
        'permissions_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'roles_id' => 'integer',
        'permissions_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'roles_id' => 'required',
        'permissions_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function roles()
    {
        return $this->belongsTo(\App\Models\roles::class, 'roles_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function permissions()
    {
        return $this->belongsTo(\App\Models\permissions::class, 'permissions_id', 'id');
    }
}
