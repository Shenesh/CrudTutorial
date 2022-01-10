<?php

namespace App\Http\Controllers;

use App\Product;
use DB;
use Illuminate\Http\Request;


class search2Controller extends Controller
{
    public function index(){
        return view('search2.index');
    }

    public function autocomplete( Request $request){
        $data = [];

        if($request->has('q')){
            $search = $request->q;
            $data =Product::select("id","product_name")        // DB::table('users')->select("*", DB::raw("CONCAT(users.first_name,' ',users.last_name) AS full_name"))
            		->where('product_name','LIKE',"%$search%")
            		->get();
        }
        return response()->json($data);
    }

    public function index_2(){
        return view('search2.autocomplete');
    }

    public function fetchdata(Request $request)

    {
        if($request->get('query'))
        {
         $query = $request->get('query');
         $data = DB::table('products')
           ->where('product_name', 'LIKE', "%{$query}%")
           ->get();
         $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
         foreach($data as $row)
         {
          $output .= '
          <li>'.$row->product_name.'</li>
          ';
         }
         $output .= '</ul>';
         echo $output;
        }
    }


}
