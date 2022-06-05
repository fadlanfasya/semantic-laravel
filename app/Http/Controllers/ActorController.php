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

        $cities = collect($data->getByCity($city));
        $justcity = $cities->unique('country');
        $justcity->values()->all();
        return view('city',compact('justcity','city'));
    }

    public function getActorById($id){
        $data = new DataController();

        $ids = collect($data->getActorById($id));
        $justid = $ids->unique('actorid');
        $justid->values()->all();
        // dd($unique);
        $roles = collect($data->getActorById($id));
        $role = $roles->unique('movieid');
        $role->values()->all();

        return view('detailactor',compact('justid','role','id'));
    }

    public function search(Request $request){
        $data = new DataController();

        $varsearch = $request->search;
        $search = $data->search($varsearch);
        return view('hasilsearch',compact('search','varsearch'));
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
}