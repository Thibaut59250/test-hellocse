<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccueilController extends Controller
{

    /*
     *
     * Affiche la page d'accueil non connectée avec  les stars
     *
     */
    public function afficher_accueil(){

        $stars = DB::table('stars')->get();

        return view('vue_utilisateur', array(
            'stars' => $stars->toArray(),
        ));
    }
}
