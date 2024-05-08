<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Inertia\Inertia;
use App\Models\Config;
use App\Models\Feature;
use App\Models\Organization;

class DashboardController extends Controller
{
    public function index()
    {
        
        $members = Auth()->user()->members;
        if (!$members) {
            return Inertia::render('Error', [
                'message' => "You are not a register member."
            ]);
        }
        foreach($members as $member){
            $member->organization;
        }

        session(['organization'=>$members[0]->organization]);

        return Inertia::render('Member/Dashboard', [
            'members' => $members,
            'features'=>Article::whereBelongsTo(session('organization'))->where('category_code','FEATURE')->orderBy('id','DESC')->limit(4)->get(),
            'articles' => Article::whereBelongsTo(session('organization'))->where('category_code','NEWS')->get(),
            'card_style' => Config::item('card_styles')[session('organization')->card_style],
        ]);
    }
    public function getQrcode()
    {
        $userId = auth()->user()->id;
        $memberId = auth()->user()->id;
        $organizationId = session('organization')->id;
        $time = time();
        $text = $organizationId . ',' . $memberId . ',' . $time;
        return $text . ',' . hash('crc32', $text);

    }
}
