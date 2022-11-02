<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;

class FiltersController extends Controller
{
    public function wedding(){

        $query = Photo::where('category' ,'wedding');
        $photos = QueryBuilder::for($query)
            ->paginate(15);

        return view('pages.portfolio')->with('photos' , $photos);
    }

    public function outdoor(){

        $query = Photo::where('category' ,'outdoor');
        $photos = QueryBuilder::for($query)
            ->paginate(20);

        return view('pages.portfolio')->with('photos' , $photos);
    }

    public function family(){

        $query = Photo::where('category' ,'family');
        $photos = QueryBuilder::for($query)
            ->paginate(20);

        return view('pages.portfolio')->with('photos' , $photos);
    }

    public function pregnant(){

        $query = Photo::where('category' ,'pregnant');
        $photos = QueryBuilder::for($query)
            ->paginate(20);

        return view('pages.portfolio')->with('photos' , $photos);
    }

    public function portrait(){

        $query = Photo::where('category' ,'portrait');
        $photos = QueryBuilder::for($query)
            ->paginate(20);

        return view('pages.portfolio')->with('photos' , $photos);
    }

    public function couple(){

        $query = Photo::where('category' ,'couple');
        $photos = QueryBuilder::for($query)
            ->paginate(20);

        return view('pages.portfolio')->with('photos' , $photos);
    }

    public function nature(){

        $query = Photo::where('category' ,'nature');
        $photos = QueryBuilder::for($query)
            ->paginate(15);

        return view('pages.portfolio')->with('photos' , $photos);
    }

    public function creative(){

        $query = Photo::where('category' ,'creative');
        $photos = QueryBuilder::for($query)
            ->paginate(15);

        return view('pages.portfolio')->with('photos' , $photos);
    }
}
