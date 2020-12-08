<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    public function index(Request $request)
    {
        $products = Products::where('delete_flag', 0)->all();
        return response(['products' => $products], 200);
    }
}
