<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Feature;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            ['organization_id'=>1,'sequence'=>1,'title_zh'=>'新聞與活動','content_zh'=>'新聞部分是用來發布組織的最新消息和事件，向公眾展示其在社會和環境領域中所做的工作，並提高對其使命的認識和理解。 ','tag_zh'=>'通告','url'=>'#','image'=>'images/news_event.png'],
            ['organization_id'=>1,'sequence'=>1,'title_zh'=>'表格及報名','content_zh'=>'','tag_zh'=>'','url'=>'#','image'=>'images/form_application.png'],
            ['organization_id'=>1,'sequence'=>1,'title_zh'=>'表格及報名','content_zh'=>'','tag_zh'=>'','url'=>'#','image'=>'images/learn_share.png'],
            ['organization_id'=>1,'sequence'=>1,'title_zh'=>'表格及報名','content_zh'=>'','tag_zh'=>'','url'=>'#','image'=>'images/community.png'],
        ];
        foreach($data as $d){
            Feature::create($d);
        }
    }
}
