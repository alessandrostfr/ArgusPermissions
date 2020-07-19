<?php

    //A DIFERENCIA DE LAS GATES, LAS POLITICAS TIENEN QUE ESTAR ENLAZADAS A UN MODELO

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{

    use HandlesAuthorization;


    public function viewAny(User $AuthenticateUser)
    {
        //
    }


    public function create(User $AuthenticateUser)
    {
        return $AuthenticateUser->id >0;
    }


    public function update(User $AuthenticateUser, User $user, $perm=null)
    {
        if($AuthenticateUser->havePermission($perm[0])){
            return true;
        }elseif($AuthenticateUser->havePermission($perm[1])){
            return $AuthenticateUser->id === $user->id;
        }else{
            return false;
        }
    }


    public function view(User $AuthenticateUser, User $user, $perm=null)
    {

        if($AuthenticateUser->havePermission($perm[0])){
            return true;
        }elseif($AuthenticateUser->havePermission($perm[1])){
            return $AuthenticateUser->id === $user->id;
        }else{
            return false;
        }
        
    }


}
