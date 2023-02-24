<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Ejercicio;
use Illuminate\Auth\Access\HandlesAuthorization;

class EjercicioPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return true;
    }


    public function view(User $user, Ejercicio $ejercicio)
    {
        if($user->isAdmin() || $user->isEntrenador()) return true;
    }


    public function create(User $user)
    {
        if($user->isAdmin() || $user->isEntrenador()) return true;
    }


    public function update(User $user, Ejercicio $ejercicio)
    {
        if($user->isAdmin() || $user->isEntrenador()) return true;
    }


    public function delete(User $user, Ejercicio $ejercicio)
    {
        if($user->isAdmin()) return true;
    }


    public function restore(User $user, Ejercicio $ejercicio)
    {
        //
    }


    public function forceDelete(User $user, Ejercicio $ejercicio)
    {
        //
    }
}
