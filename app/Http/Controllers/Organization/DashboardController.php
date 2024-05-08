<?php

namespace App\Http\Controllers\Organization;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Member;
use App\Models\Organization;
use App;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Organization::class);
    }

    public function index(){
        $this->authorize('view',session('organization'));
        return Inertia::render('Organization/Dashboard',[
            'organizations' => auth()->user()->organizations,
            'member'=>auth()->user()->member,
            //'current_organization'=>session('organization')
        ]);
        //return redirect()->route('manage.list');

    }
    
}
