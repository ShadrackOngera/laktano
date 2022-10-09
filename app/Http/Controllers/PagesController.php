<?php

namespace App\Http\Controllers;

use App\Models\Mailing;
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

    public function storeEmail(Request $request){
        $request->validate([
            'email' => 'required',
        ]);


        $mailing = Mailing::create([
            'email' => $request->input('email'),
        ]);

        return redirect()->back();
    }

}
