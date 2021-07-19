<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Get authenticated user.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function current(Request $request)
    {
        return response()->json($request->user());
    }

    /**
     * Get users list.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function usersList(Request $request)
    {
        return response()->json(User::get());
    }
}
