<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mobile;

class MobileController extends Controller
{
     public function index(Request $request)
    {
        $color = $request->input('color');
        $storage = $request->input('storage');

        $mobiles = Mobile::select('name','color', 'storage');

        if ($color) {
            $mobiles->where('color', $color);
        }

        if ($storage) {
            $mobiles->where('storage', $storage);
        }

        return response()->json(
            
            $mobiles->get());
    }
}
