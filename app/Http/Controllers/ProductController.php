<?php

namespace App\Http\Controllers;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{

    
   
    public function index(Request $request)
    {
        $query = DB::select('SELECT tbl_product.id_product, tbl_detail.name_product, tbl_detail.description, tbl_category.name_category
        FROM tbl_product INNER JOIN tbl_detail 
        ON tbl_product.id_detail_product = tbl_detail.id_detail INNER JOIN tbl_category ON tbl_product.id_category_product = tbl_category.id_category'.$this->sort($request).$this->limit($request).$this->offset($request));
        
        return $this->groubByAndResponse($query);
    }

    private function limit($request){
        $limit = $request->query('limit');

        $query = ($limit == '') ? "" : " LIMIT ".$limit;
        return $query;
    }

    private function offset($request)
    {
        $offset = $request->query('offset');

        $query = ($offset == '') ? "" : " OFFSET ".$offset;
        return $query;
    }

    private function sort($request)
    {
        $sort = $request->query('sort');

        $query =  " ORDER BY tbl_product.id_product ".$sort;
        return $query;
    }

    

    

    private function groubByAndResponse($query){
        $grub = collect($query)->groupBy('name_category');
        $response = $grub->all();
        
        return $response;
    }
}
