<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\DataController;

class SearchController extends Controller
{
    public function search(Request $request){
        $data = new DataController();

        $varsearch = $request->search;
        $search = $data->search($varsearch);
        return view('hasilsearch',compact('search','varsearch'));
    }
}  