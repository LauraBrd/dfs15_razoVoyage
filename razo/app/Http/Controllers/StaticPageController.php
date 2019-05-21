<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    
    public function about() {
        $var = rand(0, 10);
        /*if ($var == 10) {
            $message = "Ce message indique à l’utilisateur qu’il a de la chance et qu’il bénéficie d’un code
            promotionnel « SURPRISE » permettant d’avoir une réduction de -50% sur tout le site,
            offre valable aujourd’hui seulement";
            return view("about");
        }*/
        if ($var == 10) {
            return view("a_propos", ['$var' => true]);
        }
        //return view("a_propos", compact('message'));
        return view("a_propos");
    }

}
