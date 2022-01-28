<?php

namespace App\Http\Controllers;
use App\Models\tbl_category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $query = tbl_category::get();

        return response()->json($query);
    }
}
