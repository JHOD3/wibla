<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class roles_user
 * @package App\Models
 * @version July 6, 2020, 12:56 am UTC
 *
 * @property \App\Models\roles $roles
 * @property \App\Models\users $users
 * @property integer $roles_id
 * @property integer $users_id
 */
class roles_user extends Model
{
    use SoftDeletes;

    public $table = 'roles_users';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'roles_id',
        'users_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'roles_id' => 'integer',
        'users_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'roles_id' => 'required',
        'users_id' => 'required'
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
    public function users()
    {
        return $this->belongsTo(\App\Models\users::class, 'users_id', 'id');
    }
}
