<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 11/19/2017
 * Time: 3:32 PM
 */

namespace App\Http\AuthTraits;

use Illuminate\Support\Facades\Auth;

trait OwnsRecord
{
    public function userNotOwnerOf($modelRecord)
    {
        return $modelRecord->user_id != Auth::id();
    }

    public function currentUserOwns($modelRecord)
    {
        return $modelRecord->user_id === Auth::id();
    }

    public function adminOrCurrentUserOwns($modelRecord)
    {
        if (Auth::user()->is_admin == 1) {
            return true;
        }
        return $modelRecord->user_id === Auth::id();
    }

    public function allowUserUpdate($user)
    {
        if (Auth::user()->isAdmin()) {
            return true;
        }
        return $user->id === Auth::id();
    }
}
