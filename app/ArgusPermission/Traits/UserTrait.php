<?php

namespace App\ArgusPermission\Traits;

trait UserTrait
{
    /**
     * Roles assigned to the authenticated user.
     *
     * This relationship uses the default Laravel pivot table name: role_user.
     */
    public function roles()
    {
        return $this->belongsToMany('App\ArgusPermission\Models\Role')->withTimestamps();
    }

    /**
     * Check whether the user has a concrete permission slug.
     *
     * A role with full-access = "yes" acts as an administrator role and grants
     * every permission. Otherwise, the method scans the permissions attached to
     * every assigned role.
     */
    public function havePermission($permission)
    {
        if (empty($permission)) {
            return false;
        }

        foreach ($this->roles as $role) {
            if ($role->getAttribute('full-access') === 'yes') {
                return true;
            }

            foreach ($role->permissions as $rolePermission) {
                if ($rolePermission->slug === $permission) {
                    return true;
                }
            }
        }

        return false;
    }
}
