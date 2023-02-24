<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Rutina;
use Illuminate\Auth\Access\HandlesAuthorization;

class RutinaPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return true;
    }


    public function view(User $user, Rutina $rutina)
    {
        if($user->isAdmin() || $user->isEntrenador()) return true;
    }


    public function create(User $user)
    {
        if($user->isAdmin() || $user->isEntrenador()) return true;
    }


    public function update(User $user, Rutina $rutina)
    {
        if($user->isAdmin() || $user->isEntrenador()) return true;
    }


    public function delete(User $user, Rutina $rutina)
    {
        if($user->isAdmin() || $user->isEntrenador()) return true;
    }


    public function restore(User $user, Rutina $rutina)
    {
        //
    }


    public function forceDelete(User $user, Rutina $rutina)
    {
        //
    }
}

