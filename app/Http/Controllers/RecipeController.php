<?php

namespace App\Http\Controllers;
class RecipeController extends Controller{
    function liste() {

    	$v = [
    		array ('boisson' => 'Expresso', 'code' => 'EXP', 'ingrédients' => ['Café' => 1, 'Eau' => 2]),
    		array ('boisson' => 'Double Expresso', 'code' => 'DBL', 'ingrédients' => ['Café' => 2, 'Eau' => 2]),
    		array ('boisson' => 'Chocolat', 'code' => 'CHO', 'ingrédients' => ['Chocolat' => 2, 'Lait' => 2]),
    		array ('boisson' => 'Thé', 'code' => 'TEA', 'ingrédients' => ['Thé' => 1, 'eau' => 2]),
    		array ('boisson' => 'Mojito', 'code' => 'MOJ', 'ingrédients' => ['Mojitomix' => 3, 'eau' => 1]),
    		 ];

        return view('pages/recettes', ["zboub" => $v]);
    }
    
}



