<?php
namespace App\Http\Controllers;

use App\Models\User;

class UsersController extends Controller
{
    public function usersView()
    {
        $users = User::all();
        return view('users.users', [
            'users' => $users
        ]);
    }

    public function delete(User $user) {
        $user->active = false;
        $user->save();
        $this->usersView();
    }


    public function active(User $user) {
        if($user ) {
            return (true);
        }else{
            return (false);
        }
    }

}
