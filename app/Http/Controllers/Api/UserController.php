<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Category;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    public function index(): JsonResponse { 
        return User::all(); 
    }
    
    public function store(Request $request) { 
        return User::create($request->all()); 
    }
    
    public function update(Request $request, user $user) { 
        $user->update($request->all());
        return $user; 
    }
    
    public function destroy(User $user) { 
        $user->delete(); 
        return response()->noContent(); 
    }

    public function show(User $user) { 
        return $user;
    }

    public function getUsersEmailDomainNames(Request $request) {

        $list = User::selectRaw(
            "SUBSTR(email, INSTR(email, '@') + 1) AS email_domain, 
            COUNT(*) AS user_count"
        )->groupByRaw("SUBSTR(email, INSTR(email, '@') + 1)")->get();
        return response()->json($list);
    }

}
