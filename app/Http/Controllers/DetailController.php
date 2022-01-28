<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbl_detail;

class DetailController extends Controller
{
    public function index($id)
    {
        $query = tbl_detail::where('id_detail', $id)->get();

        return response()->json($query);
    }
}
