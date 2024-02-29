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

        $technologies = Technology::paginate(8);

        return response()->json([
            'success' => true,
            'technologies' => $technologies,
        ]);
    }

    public function createTechnology(Request $request) {

        $data = $request -> all();

        $technology = new Technology;

        $technology -> name = $data['name'];
        $technology -> description = $data['description'];

        $technology -> save();

        return response()->json([
            'success' => true,
            'technology' => $technology
        ]);
    }
}
