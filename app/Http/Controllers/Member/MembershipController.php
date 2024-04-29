<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Config;

class MembershipController extends Controller
{
    public function index(){
        $member=auth()->user()->member;
        $certificates=Auth()->user()->member->certificates;
        return Inertia::render('Member/Membership',[
            'member'=>$member,
            'certificates'=>$certificates
        ]);
    }
    public function cards(){
        $member=auth()->user()->member;
        $member->organizations;
        //dd($member);
        return Inertia::render('Member/Cards',[
            'member'=>$member
        ]);
    }
}
