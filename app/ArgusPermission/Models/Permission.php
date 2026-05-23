<?php

namespace App\ArgusPermission\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    /**
     * Attributes that can be mass assigned from seeders/forms.
     */
    protected $fillable = [
        'name',
        'slug',
        'description',
    ];

    /**
     * Roles that contain this permission.
     *
     * This relationship uses Laravel's default pivot table name:
     * permission_role.
     */
    public function roles()
    {
        return $this->belongsToMany('App\ArgusPermission\Models\Role')->withTimestamps();
    }
}
