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
        $name = '';
        $born = '';
        $city = '';
        $country = '';
        $hasrole = '';
        $moviename = '';
        $image = '';

        if ($type == 'actorid') {
            $id == $search;
        } else if ($type == 'name') {
            $name = $search;
        } else if ($type == 'born') {
            $name = $search;
        } else if ($type == 'city') {
            $city = $search;
        } else if ($type == 'country') {
            $country = $search;
        } else if ($type == 'hasrole') {
            $hasrole = $search;
        } else if ($type == 'moviename') {
            $moviename = $search;
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
            
            SELECT ?actorid ?name ?born ?city ?country ?movie ?charactername ?image
            WHERE {
              ?role rdf:Type ?roleinmovie;
                  ad:charaname ?charactername.
              ?roleinmovie md:moviename ?movie.
              ?actor ad:hasrole ?role;
                     ad:actorid ?actorid;
                     ad:name ?name;
                     ad:born ?born;
                     ad:city ?city;
                     ad:country ?country;
                     ad:image ?image.
                    FILTER regex (?actorid, \"{$id}\", \"i\");
                    FILTER regex (?name, \"{$name}\", \"i\");
                    FILTER regex (?born, \"{$born}\", \"i\");
                    FILTER regex (?city, \"{$city}\", \"i\");
                    FILTER regex (?country, \"{$country}\", \"i\");
                    FILTER regex (?charactername, \"{$hasrole}\", \"i\");
                    FILTER regex (?movie, \"{$moviename}\", \"i\");
                    FILTER regex (?movie, \"{$image}\", \"i\").
                }"
        );

        return $result;
    }
}