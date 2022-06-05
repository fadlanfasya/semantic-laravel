<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

require_once realpath(__DIR__ . '/..') . "../../vendor/autoload.php";
require_once realpath(__DIR__ . '/..') . "../Http/html_tag_helper.php";


\EasyRdf\RdfNamespace::set('ad', 'http://examplesparql.com/n/actordata#');
\EasyRdf\RdfNamespace::set('d', 'http://examplesparql.com/n/data#');
\EasyRdf\RdfNamespace::set('md', 'http://examplesparql.com/n/moviedata#');
\EasyRdf\RdfNamespace::set('rdf', 'http://www.w3.org/1999/02/22-rdf-syntax-ns#/');

class Sparql extends Model
{
    use HasFactory;

    function getActor($type = 'all', $search = '')
    {
        //$sparql = new \EasyRdf\Sparql\Client('https://62a0-125-164-16-203.ap.ngrok.io/#/dataset/actor/query');
        $sparql = new \EasyRdf\Sparql\Client('http://localhost:3030/actor/query');

        $id = '';
        $movieid = '';
        $name = '';
        $born = '';
        $city = '';
        $country = '';
        $hasrole = '';
        $moviename = '';
        $year = '';
        $image = '';

        if ($type == 'actorid') {
            $id = $search;
        } else if($type == 'movieid'){
            $movieid = $search;
        } elseif ($type == 'name') {
            $name = $search;
        } else if ($type == 'born') {
            $born = $search;
        } else if ($type == 'city') {
            $city = $search;
        } else if ($type == 'country') {
            $country = $search;
        } else if ($type == 'hasrole') {
            $hasrole = $search;
        } else if ($type == 'moviename') {
            $moviename = $search;
        } else if ($type == 'year'){
            $year = $search;
        } else if ($type == 'image'){
            $image = $search;
        } else if ($type == 'all') {
            $search = '';
        } else {
            return "Unknown type";
        }

        $result = $sparql->query(
            "PREFIX rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#>
            prefix ad: <http://examplesparql.com/n/actordata#>
            prefix md: <http://examplesparql.com/n/moviedata#>
            prefix d: <http://examplesparql.com/n/data#>
            
            SELECT ?actorid ?name ?born ?city ?country ?movieid ?movie ?year ?poster ?trailer ?charactername ?image ?marriedto
            WHERE {
              ?role rdf:Type ?roleinmovie;
                  ad:charaname ?charactername.
              ?roleinmovie md:moviename ?movie;
                           md:year ?year;
                           md:poster ?poster;
                           md:trailer ?trailer;
                           md:movieid ?movieid.
              ?actor ad:hasrole ?role;
                     ad:name ?name;
                     ad:born ?born;
                     ad:city ?city;
                     ad:country ?country;
                     ad:image ?image.
                     OPTIONAL {?actor ad:actorid ?actorid.}
                     OPTIONAL {?actor ad:marriedto ?marriedto.}
                    FILTER regex (?actorid , \"{$id}\", \"i\")
                    FILTER regex (?name, \"{$name}\", \"i\")
                    FILTER contains(lcase(str(?city)), lcase(str(\"".$city."\")))
                    FILTER regex (?country, \"{$country}\", \"i\")
                    FILTER regex (?movie, \"{$moviename}\", \"i\")
                    FILTER regex (?movieid, \"{$movieid}\", \"i\")
                }"
        );

        return $result;
    }

    function getName($search = '',$type = '')
    {
        //$sparql = new \EasyRdf\Sparql\Client('https://62a0-125-164-16-203.ap.ngrok.io/#/dataset/actor/query');
        $sparql = new \EasyRdf\Sparql\Client('http://localhost:3030/actor/query');

        $name = '';

        
        if ($type == 'name') {
            $name = $search;
        } else {
            return "Unknown type";
        }

        $result = $sparql->query(
            "PREFIX rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#>
            prefix ad: <http://examplesparql.com/n/actordata#>
            prefix md: <http://examplesparql.com/n/moviedata#>
            prefix d: <http://examplesparql.com/n/data#>
            
            SELECT ?actorid ?name ?born ?city
            WHERE {
              ?actor ad:name ?name;
                     ad:born ?born;
                     ad:city ?city;
                     OPTIONAL {?actor ad:actorid ?actorid.}
                    FILTER regex (?name, \"{$name}\", \"i\")
                }"
        );
        return $result;
    }
}