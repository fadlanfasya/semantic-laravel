<?php

namespace App\Http\Controllers;

use App\Models\Sparql;

class DataController extends Controller
{

    function search($search)
    {
        $sparql = new Sparql();
        
        $Id = $sparql->getActor('actorid', $search);
        $Image = $sparql->getActor('image',$search);
        $Name = $sparql->getActor('name', $search);
        $Country = $sparql->getActor('country', $search);
        $Born = $sparql->getActor('born', $search);
        $City = $sparql->getActor('city', $search);
        $Role = $sparql->getActor('hasrole', $search);

        return compact("Id","Image","Name", "Country", "Born", "City", "Role");
    }

    function getAllActor(){
        $sparql = new Sparql();

        return $sparql->getActor('all');
    }

    function getActorById($id){
        $sparql = new Sparql();

        return $sparql->getActor('id',$id);
    }

    function getActor($name){
        $sparql = new Sparql();

        return $sparql->getActor('name', $name);
    }

    function getByCity($city){
        $sparql = new Sparql();

        return $sparql->getActor('city', $city);
    }

    function getByCategory($country){
        $sparql = new Sparql();

        return $sparql->getActor('country', $country);
    }

    function getBySpecMenu($hasrole){
        $sparql = new Sparql();

        return $sparql->getActor('hasrole', $hasrole);
    }  
}
