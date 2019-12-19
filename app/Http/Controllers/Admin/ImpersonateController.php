<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class ImpersonateController extends Controller
{
    public function index($id)
    {
        $user = User::where('id', $id)->first();

        if($user)
        {
            session()->put('Impersonate', $user->id);
        }

        return redirect('/home');
    }

    public function destroy($id)
    {
        session()->forget('Impersonate');

        return redirect('home');
    }
}
