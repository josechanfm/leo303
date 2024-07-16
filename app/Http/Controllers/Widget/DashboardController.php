<?php

namespace App\Http\Controllers\Widget;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Poll;

class DashboardController extends Controller
{
    public function index(){
        return Inertia::render('Widget/Dashboard',[
            'polls'=>Poll::all(),
            'configs'=>'widget configs'
        ]);
    }
}
