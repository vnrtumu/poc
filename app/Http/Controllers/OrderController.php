<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function storeOrder( Request $request )
    {
        $data = $request->all();
        $data['item_name'] = substr($data['item_name'], 2, -1);
        $output = Order::create($data);
        return response()->json(['success' => $output]);
    }

  
}
