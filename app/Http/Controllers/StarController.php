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
     * Supprime une star dans la BDD
     *
     */
    public function supprimer(Request $formulaire){

        $star = $formulaire->all();

        $star_db = Stars::find($star['id']);

        if($star_db == null)
            return;

        $star_db->delete();
    }

    /*
     *
     * Modifie une star dans la BDD ou la modifie
     *
     */
    public function modifier(Request $formulaire){

        $star = $formulaire->all();

        $star_db = Stars::find($star['id']);

        if($star_db == null)
            $star_db = new Stars();

        $star_db->nom = $star['nom'];
        $star_db->description = $star['description'];
        $star_db->url_photo = $star['url_photo'];

        $star_db->save();
    }
}
