<?php

namespace App\Http\Controllers;

use App\Models\Sparql;

class DataController extends Controller
{

    function search($search)
    {
        $sparql = new Sparql();
        
        $name = $sparql->getName($search, 'name');

        return compact('name');
    }

    function getAllActor(){
        $sparql = new Sparql();

        return $sparql->getActor('all');
    }

    function getActorById($Id){
        $sparql = new Sparql();
        
        return $sparql->getActor('actorid',$Id);
    }

    // function getActor($name){
    //     $sparql = new Sparql();

    //     return $sparql->getActor('name', $name);
    // }

    // function getByCity($city){
    //     $sparql = new Sparql();

    //     return $sparql->getActor('country', $city);
    // }

    function getAllMovie(){
        $sparql = new Sparql();

        return $sparql->getActor('all');
    }

    function getMovieById($Id){
        $sparql = new Sparql();
        
        return $sparql->getActor('movieid',$Id);
    }
}
