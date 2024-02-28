<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Technology;

class ApiController extends Controller
{
    public function getMyTest() {

        return response()->json([
            'success' => true,
            'message' => 'OK'
        ]);
    }

    public function getTechnologies() {

        $technologies = Technology::all();

        return response()->json([
            'success' => true,
            'technologies' => $technologies,
        ]);
    }
}
