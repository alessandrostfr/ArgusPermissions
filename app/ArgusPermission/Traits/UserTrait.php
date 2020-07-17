<?php

    namespace App\ArgusPermission\Traits;

    trait UserTrait{

        public function roles(){
            return $this->belongsToMany('App\ArgusPermission\Models\Role')->withTimesTamps();
        }
    
        public function havePermission($permission){
            foreach($this->roles as $role){
                if($role['full-access'] == "yes"){
                    return true;
                }
    
                foreach($role->permissions as $role_permission){
                    if($role_permission->slug == $permission){
                        return true;
                    }
                }
            }
            return false;
            
        }
    }