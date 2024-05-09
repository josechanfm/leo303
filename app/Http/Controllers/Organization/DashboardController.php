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
        if(empty(session('organization'))){
            if(empty(session('member'))){
                return Inertia::render('Error', [
                    'message' => "You are not a organization manager."
                ]);
            };
            session(['organization'=>session('member')->organization]);
        }

        $this->authorize('view',session('organization'));
        return Inertia::render('Organization/Dashboard',[
            'current_organization'=>session('organization'),
            'organizations' => auth()->user()->organizations,
            'member'=>session('member'),
        ]);
    }
    
}
