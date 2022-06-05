<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\DataController;

class MovieController extends Controller
{
    public function index(){
        // return view('v_landingpage');

        $data = new DataController();

        $dataAll = collect($data->getAllMovie());
        $unique = $dataAll->unique('movie');
        $unique->values()->all();

        return view('movie',compact('unique'));
    }

    public function getMovieById($movieid){
        $data = new DataController();

        $ids = collect($data->getMovieById($movieid));
        $justid = $ids->unique('movieid');
        $justid->values()->all();
        // dd($unique);
        $roles = collect($data->getMovieById($movieid));
        $unique = $roles->unique('actorid');
        $unique->values()->all();
        return view('detailmovie',compact('justid','unique','movieid'));
    }

    // public function categories($category){
    //     $data = new DataController();

    //     $categories = $data->getByCategory($category);
    //     return view('v_restaurantsByCategory',compact('categories','category'));
    // }
    

    // public function specialMenus($specialMenu){
    //     $data = new DataController();

    //     $specialMenus = $data->getBySpecMenu($specialMenu);
    //     return view('v_restaurantsBySpecMenu',compact('specialMenus','specialMenu'));
    // }

    // public function search(Request $request){
    //     $data = new DataController();

    //     $varsearch = $request->search;
    //     $search = $data->search($varsearch);
    //     return view('v_hasilSearch',compact('search','varsearch'));
    // }
}