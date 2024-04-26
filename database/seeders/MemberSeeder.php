<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Member;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Member::factory()->count(100)->create();
        Member::find(1)->update(['user_id'=>5,'display_name'=>'Ricky','family_name'=>'唐','given_name'=>'偉杰','email'=>'rickytong@example.com']);
        Member::find(2)->update(['user_id'=>6,'display_name'=>'發哥','family_name'=>'胡','given_name'=>'鴻發']);
        Member::find(3)->update(['user_id'=>7,'display_name'=>'堅哥','family_name'=>'羅','given_name'=>'志堅']);
    }


}
