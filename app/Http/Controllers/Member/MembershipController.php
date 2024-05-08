<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Inertia\Inertia;
use App\Models\Organization;

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
    public function switch(Organization $organization){
        session(['organization'=>$organization]);
        return to_route('member.dashboard');
    }
}
