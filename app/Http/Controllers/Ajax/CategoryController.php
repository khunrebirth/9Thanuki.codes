<?php

namespace App\Http\Controllers\Ajax;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class CategoryController extends Controller
{
    function getCategoryById(Request $request) {
        $category = Category::find($request->id);

        return response()->json([
            'data' => $category
        ]);
    }
}
