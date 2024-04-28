<?php

namespace Database\Seeders;

use App\Models\Organization;
use App\Models\User;
use App\Models\Member;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Organization::factory()->count(10)->create();
        // $organization=Organization::find(1);
        // $organization->abbr="MJA";
        // $organization->full_name="澳門柔道協會";
        // $organization->save();  

  

        $data=[
            ["registration_code"=>"112233","parish"=>"S","name_zh"=>"公務人員聯合總會","abbr"=>"MCSF","name_en"=>"Macau Civil Servants Federation","address"=>"澳門荷蘭園二馬路十一號荷蘭園大廈三樓A單位","phone"=>"","href"=>"atbest.net","email"=>"","president"=>"--","card_style"=>"card_01"],
            ["registration_code"=>"","parish"=>"S","name_zh"=>"公務華員職工會","abbr"=>"MCCSA","name_en"=>"Macao Chinese Civil Servants Association","address"=>"澳門荷蘭園二馬路十一號荷蘭園大廈三樓A單位","phone"=>"","href"=>"atbest.net","email"=>"","president"=>"--","card_style"=>"card_01"],
            ["registration_code"=>"","parish"=>"S","name_zh"=>"公務高級技術員協會","abbr"=>"ATSFPM","name_en"=>"Associação dos Técnicos Superiores da Função Pública de Macau",'address'=>"澳門荷蘭園二馬路十一號荷蘭園大廈三樓A單位","phone"=>"","href"=>"atbest.net","email"=>"","president"=>"--","card_style"=>"card_01"],
            ["registration_code"=>"","parish"=>"S","name_zh"=>"公務文職人員協會","abbr"=>"CCSAM","name_en"=>"Clerical Civil Servants Association of Macau",'address'=>"澳門荷蘭園二馬路十一號荷蘭園大廈三樓A單位","phone"=>"","href"=>"atbest.net","email"=>"","president"=>"--","card_style"=>"card_01"],
            ["registration_code"=>"","parish"=>"S","name_zh"=>"市政署員工協進會","abbr"=>"AWCMAI","name_en"=>"Association of Workers of Civil and Municipal Affairs Institute",'address'=>"澳門荷蘭園二馬路十一號荷蘭園大廈三樓A單位","phone"=>"","href"=>"atbest.net","email"=>"","president"=>"--","card_style"=>"card_01"]
        ];
        foreach($data as $org){
            Organization::create($org);
        }
        $organization=Organization::find(1);
        $user=User::where('email','organizer@example.com')->get();
        $organization->users()->attach($user);
        $user=User::where('email','member1@example.com')->get();
        $organization->users()->attach($user);

        $member=Member::find(1);
        $organization->members()->attach($member);
        $member=Member::find(2);
        $organization->members()->attach($member);
        $member=Member::find(3);
        $organization->members()->attach($member);


    }
}

