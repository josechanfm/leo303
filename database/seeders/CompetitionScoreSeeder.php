<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompetitionScoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            ["organization_id"=>"0","category"=>"WORLD","title"=>"世界柔道大獎賽-世界排名積分","first"=>"1000","second"=>"800","third"=>"600","fifth"=>"400","seventh"=>"200","advance"=>"150","participate"=>"100"],
            ["organization_id"=>"0","category"=>"WORLD","title"=>"世界柔道大滿貫-世界排名積分","first"=>"1000","second"=>"800","third"=>"600","fifth"=>"400","seventh"=>"200","advance"=>"150","participate"=>"100"],
            ["organization_id"=>"0","category"=>"WORLD","title"=>"世界柔道大師賽-世界排名積分","first"=>"1000","second"=>"800","third"=>"600","fifth"=>"400","seventh"=>"200","advance"=>"150","participate"=>"100"],
            ["organization_id"=>"0","category"=>"WORLD","title"=>"世界柔道錦標賽(成人)-世界排名積分","first"=>"1000","second"=>"800","third"=>"600","fifth"=>"400","seventh"=>"200","advance"=>"150","participate"=>"100"],
            ["organization_id"=>"0","category"=>"WORLD","title"=>"世界大學生運動會","first"=>"1000","second"=>"800","third"=>"600","fifth"=>"400","seventh"=>"200","advance"=>"150","participate"=>"100"],
            ["organization_id"=>"0","category"=>"WORLD","title"=>"世界柔道錦標賽(青少年)-世界排名積分","first"=>"900","second"=>"700","third"=>"500","fifth"=>"300","seventh"=>"150","advance"=>"100","participate"=>"80"],
            ["organization_id"=>"0","category"=>"ASIA","title"=>"亞洲運動會-世界排名積分","first"=>"800","second"=>"600","third"=>"400","fifth"=>"200","seventh"=>"100","advance"=>"80","participate"=>"50"],
            ["organization_id"=>"0","category"=>"ASIA","title"=>"亞洲柔道錦標賽-世界排名積分","first"=>"260","second"=>"120","third"=>"80","fifth"=>"60","seventh"=>"40","advance"=>"30","participate"=>"20"],
            ["organization_id"=>"0","category"=>"ASIA","title"=>"亞洲青少年錦標賽-世界排名積分","first"=>"260","second"=>"120","third"=>"80","fifth"=>"60","seventh"=>"40","advance"=>"30","participate"=>"20"],
            ["organization_id"=>"0","category"=>"ACUP","title"=>"國際柔道邀請賽-世界排名積分","first"=>"250","second"=>"180","third"=>"150","fifth"=>"100","seventh"=>"70","advance"=>"50","participate"=>"20"],
            ["organization_id"=>"0","category"=>"IINVT","title"=>"亞洲盃青年及青少年柔道錦標賽-世界排名積分","first"=>"200","second"=>"150","third"=>"100","fifth"=>"80","seventh"=>"50","advance"=>"30","participate"=>"18"],
            ["organization_id"=>"0","category"=>"CHINA","title"=>"全國運動會","first"=>"700","second"=>"400","third"=>"280","fifth"=>"140","seventh"=>"120","advance"=>"80","participate"=>"60"],
            ["organization_id"=>"0","category"=>"CHINA","title"=>"全國錦標賽","first"=>"260","second"=>"120","third"=>"80","fifth"=>"60","seventh"=>"40","advance"=>"30","participate"=>"20"],
            ["organization_id"=>"0","category"=>"CHINA","title"=>"中國其他地區主辦的國際邀請賽","first"=>"90","second"=>"40","third"=>"30","fifth"=>"15","seventh"=>"12","advance"=>"8","participate"=>"6"],
            ["organization_id"=>"0","category"=>"IINVT","title"=>"國際柔道邀請賽","first"=>"150","second"=>"100","third"=>"80","fifth"=>"60","seventh"=>"40","advance"=>"20","participate"=>"10"],
            ["organization_id"=>"0","category"=>"EASIA","title"=>"東亞柔道錦標賽","first"=>"150","second"=>"100","third"=>"80","fifth"=>"60","seventh"=>"40","advance"=>"20","participate"=>"10"],
            ["organization_id"=>"0","category"=>"INTPT","title"=>"香港","first"=>"100","second"=>"70","third"=>"40","fifth"=>"20","seventh"=>"15","advance"=>"10","participate"=>"8"],
            ["organization_id"=>"0","category"=>"INTPT","title"=>"大灣區柔道邀請賽","first"=>"100","second"=>"70","third"=>"40","fifth"=>"20","seventh"=>"15","advance"=>"10","participate"=>"8"],
            ["organization_id"=>"0","category"=>"LOCAL","title"=>"全澳柔道公開賽-一級賽事","first"=>"90","second"=>"40","third"=>"30","fifth"=>"15","seventh"=>"12","advance"=>"8","participate"=>"6"],
            ["organization_id"=>"0","category"=>"LOCAL","title"=>"全澳柔道計分賽-二級賽事","first"=>"70","second"=>"30","third"=>"20","fifth"=>"12","seventh"=>"8","advance"=>"6","participate"=>"4"],
            ["organization_id"=>"0","category"=>"LOCAL","title"=>"學界柔道比賽-三級賽事","first"=>"60","second"=>"20","third"=>"12","fifth"=>"8","seventh"=>"6","advance"=>"4","participate"=>"2"]
        ];
            
        foreach($data as $d){
            DB::table('competition_scores')->insert($d);
        }
    }
}
