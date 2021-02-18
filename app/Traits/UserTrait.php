<?php

namespace App\Traits;


trait UserTrait {

    public function roles()
    {
        return $this->belongsToMany('App\Models\Roles')->withTimesTamps();
    }

    public function havePermissions($permissions)
    {
        foreach ($this->roles as $roles) {
            if($roles['full_access'] == 'SI'){
                return true;
            }

            foreach ($roles->permissions as $permi) {
                if ($permi->slug == $permissions) {
                    return true;
                }
            }
        }

        return false;
    }

}
