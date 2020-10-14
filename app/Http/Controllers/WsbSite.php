<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WsbSite extends Controller
{
    public function index($site){
        echo "WsbController";

        return ['site' => 'wsb.pl', 'city' => 'Poznań'];
    }
}
