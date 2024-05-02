<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ContentController extends Controller
{
    public function page(Request $request){
        $page=$request->page;

        if(empty($page)){
            return Inertia::render('Error',[
                'message'=>'Sorry the page you searching for does not exist.'
            ]);
        }
        return Inertia::render('Content/'.$page,[
            
        ]);
    }
}
