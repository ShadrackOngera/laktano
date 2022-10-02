<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PagesController extends Controller
{
    public function homePage(){


        return view('pages.home');
    }

    public function pricingPage(){


        return view('pages.pricing');
    }

    public function aboutPage(){


        return view('pages.about');
    }

}
