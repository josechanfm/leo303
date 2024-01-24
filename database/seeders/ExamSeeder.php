<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exams')->insert([
            'organization_id'=>0,
            'category_code'=>'REFEREE',
            'title'=>'Referee Exam',
            'description'=>'Referee Exam demo',
            'published'=>true
        ]);
        DB::table('questions')->insert([
            'exam_id'=>1,
            'type'=>'REFEREE',
            'title'=>'成為IJF裁判的最低年齡要求是多少？',
            'options'=>'[
                {
                    "value": "123",
                    "label": "18歲"
                },
                {
                    "value": "234",
                    "label": "20歲"
                },
                {
                    "value": "567",
                    "label": "25歲"
                },
                {
                    "value": "578",
                    "label": "30歲"
                },
                {
                    "value": "789",
                    "label": "35歲"
                }
            ]',
            'answer'=>1,
            'score'=>1
        ]);
        DB::table('papers')->insert([
            'exam_id'=>1,
            'user_id'=>3,
            'submitted'=>1,
            'score'=>100,
            'valid_at'=>null,
            'expire_at'=>null
        ]);
        DB::table('answers')->insert([
            'paper_id'=>1,
            'question_id'=>1,
            'answer'=>2,
            'score'=>1
        ]);

    }
}
