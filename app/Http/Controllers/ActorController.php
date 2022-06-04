<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\DataController;

class ActorController extends Controller
{
    public function index(){
        // return view('v_landingpage');

        $data = new DataController();

        $dataAll = collect($data->getAllActor());
        $unique = $dataAll->unique('actorid');
        $unique->values()->all();

        return view('actor',compact('unique'));
    }

    public function cities($city){
        $data = new DataController();

        $cities = $data->getByCity($city);
        return view('actor',compact('cities','city'));
    }

    public function getActorById($id){
        $data = new DataController();

        $ids = $data->getActor($id);
        // dd($ids);
        return view('detailactor',compact('ids','id'));
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