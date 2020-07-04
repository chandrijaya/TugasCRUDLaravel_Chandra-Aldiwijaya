<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\itemModel;

class ItemController extends Controller
{
    public function index() {
        $items = itemModel::get_all();
        return view('item.index',compact('items'));
    }

    public function create() {
        return view('item.form');
    }

    public function store(Request $request) {
        $data = $request->all();
        unset($data["_token"]);
        $item = itemModel::save($data);
        if($item){
            return redirect('/items');
        }


    }
}
