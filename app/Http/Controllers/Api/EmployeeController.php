<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

class EmployeeController extends Controller
{
    public function index(Request $request)
    {
        $user = JWTAuth::parseToken()->authenticate();

        return response()->json(Employee::select('name', 'salary')->get());
        
    }
}
