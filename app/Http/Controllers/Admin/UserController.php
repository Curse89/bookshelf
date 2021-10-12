<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\{Request, Response};
use App\Models\User;

/**
 * Admin - user controller class
 */
class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.dashboard', [
            'users' => $users
        ]);
    }

    /**
     * Show user profile
     *
     * @param integer $id
     * @return Response
     */
    public function show(int $id)
    {
        return view('user.profile', [
            'user' => User::findOrFail($id)
        ]);
    }
}
