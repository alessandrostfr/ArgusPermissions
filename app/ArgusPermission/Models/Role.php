<?php

namespace App\ArgusPermission\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    //fillable propertie

    protected $fillable = [
        'name', 'slug', 'description', 'full-access',
    ];

    /*Cuando seleccionemos rol y llamemos a esta funcion automaticamente nos devolvera a todos los usuarios relacionados con este rol*/

    public function users(){
        return $this->belongsToMany('App\User')->withTimesTamps();
    }

    public function permissions(){
        return $this->belongsToMany('App\ArgusPermission\Models\Permission')->withTimesTamps();
    }
}
