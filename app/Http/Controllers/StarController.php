<?php

namespace App\Http\Controllers;

use App\Models\Stars;
use Illuminate\Http\Request;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class StarController extends Controller
{

    /*
     *
     * Ajoute une star dans la BDD
     *
     */
    public function ajouter(Request $star){


    }

    /*
     *
     * Supprime une star dans la BDD
     *
     */
    public function supprimer(Request $star){


    }

    /*
     *
     * Modifie une star dans la BDD
     *
     */
    public function modifier(Request $formulaire){

        $star = $formulaire->all();

        $star_db = Stars::find($star['id']);

        $star_db->nom = $star['nom'];
        $star_db->description = $star['description'];
        $star_db->url_photo = $star['url_photo'];

        $star_db->save();
    }
}
