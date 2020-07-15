<?php

namespace App\ArgusPermission\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{


    //fillable propertie
    protected $fillable = [
        'name', 'slug', 'description',
    ];




    public function roles(){
        return $this->belongsToMany('App\ArgusPermission\Models\Role')->withTimesTamps();
    }
}
