<?php

namespace App\ArgusPermission\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * Attributes that can be mass assigned from the role forms.
     */
    protected $fillable = [
        'name',
        'slug',
        'description',
        'full-access',
    ];

    /**
     * Users assigned to this role.
     *
     * This relationship uses Laravel's default pivot table name: role_user.
     */
    public function users()
    {
        return $this->belongsToMany('App\User')->withTimestamps();
    }

    /**
     * Permissions assigned to this role.
     *
     * This relationship uses Laravel's default pivot table name:
     * permission_role.
     */
    public function permissions()
    {
        return $this->belongsToMany('App\ArgusPermission\Models\Permission')->withTimestamps();
    }
}
