<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Config;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            ['organization_id'=>0,'key'=>'article_categories','value'=>
                '[{"value":"FEATURE","label":"Feature"},{"value":"BLOG","label":"Blog"},{"value":"NEWS","label":"News"}]'
            ],
            ['organization_id'=>0,'key'=>'bulletin_categories','value'=>
                '[{"value": "CMTE","label": "Committee"}, {"value": "GEN","label": "General"}]',
            ],
            ['organization_id'=>0,'key'=>'message_categories','value'=>
                '[{"value": "ALL","label": "Everyone"}, 
                  {"value": "ORG","label": "Organization"},
                  {"value": "MEM","label": "Member Only"},
                  {"value": "IND","label": "Individual"}
                 ]',
            ],
            ['organization_id'=>0,'key'=>'event_categories','value'=>
                '[{
                    "value": "TRANING",
                    "label": "Traning"
                }, {
                    "value": "COURSE",
                    "label": "Course"
                }]'
            ],
            ['organization_id'=>0,'key'=>'certificate_categories','value'=>
                '[{
                    "value": "BELT",
                    "label": "Belt"
                }, {
                    "value": "REFEREE",
                    "label": "Referee"
                }, {
                    "value": "COACH",
                    "label": "Coach"
                }, {
                    "value": "OTHER",
                    "label": "Other"
                }]',
            ],
            ['organization_id'=>0,'key'=>'attendance_status','value'=>
                '[{
                        "value": "ATTEND",
                        "label": "Attend"
                    }, {
                        "value": "LATE",
                        "label": "Late"
                    }, {
                        "value": "EXCUSE",
                        "label": "Excuse"
                    }, {
                        "value": "ABSENT",
                        "label": "Absent"
                }]'
            ],
            ['organization_id'=>0,'key'=>'card_styles','value'=>
                '{"card_01": {"name":"Card 01","background": "card_01.png","logo": "site_logo.png","font_style": "font-family:sans-serif;color:#c24641"},
                  "card_02": {"name":"Card 02","background": "card_02.png","logo": "site_logo.png","font_style": "font-family:sans-serif;color:white"},
                  "card_03": {"name":"Card 03","background": "card_03.png","logo": "site_logo.png","font_style": "font-family:sans-serif;color:white"},
                  "card_04": {"name":"Card 04","background": "card_03.png","logo": "site_logo.png","font_style": "font-family:sans-serif;color:white"},
                  "card_05": {"name":"Card 05","background": "card_03.png","logo": "site_logo.png","font_style": "font-family:sans-serif;color:white"},
                  "card_06": {"name":"Card 06","background": "card_03.png","logo": "site_logo.png","font_style": "font-family:sans-serif;color:white"},
                  "card_07": {"name":"Card 07","background": "card_03.png","logo": "site_logo.png","font_style": "font-family:sans-serif;color:white"},
                  "card_08": {"name":"Card 08","background": "card_03.png","logo": "site_logo.png","font_style": "font-family:sans-serif;color:white"},
                  "card_09": {"name":"Card 09","background": "card_03.png","logo": "site_logo.png","font_style": "font-family:sans-serif;color:white"},
                  "card_10": {"name":"Card 10","background": "card_03.png","logo": "site_logo.png","font_style": "font-family:sans-serif;color:white"},
                  "card_11": {"name":"Card 11","background": "card_03.png","logo": "site_logo.png","font_style": "font-family:sans-serif;color:white"},
                  "card_12": {"name":"Card 12","background": "card_03.png","logo": "site_logo.png","font_style": "font-family:sans-serif;color:white"},
                  "card_13": {"name":"Card 13","background": "card_03.png","logo": "site_logo.png","font_style": "font-family:sans-serif;color:white"},
                  "card_14": {"name":"Card 14","background": "card_03.png","logo": "site_logo.png","font_style": "font-family:sans-serif;color:white"}
                }'
            ],
            ['organization_id'=>0,'key'=>'staff_options','value'=>
                '[{"value":"parent","label":"家長義工"},
                  {"value":"student","label":"學生義工"},
                  {"value":"weighting","label":"過磅工作人員(裁判人員或已有相關工作經驗優先)"},
                  {"value":"mc_match","label":"賽事司儀(已有相關工作經驗優先)"},
                  {"value":"checker","label":"檢錄組(已有相關工作經驗優先)"},
                  {"value":"score_digital","label":"電子計分操作員(已持有IJF國際柔道賽事計時記分系統操作員培訓優先報名)"},
                  {"value":"score_manual","label":"計時記分操作員(手動計時記分)"},
                  {"value":"control","label":"司令台(已有相關工作經驗優先)"},
                  {"value":"mc_award","label":"頒獎禮司儀(已有相關工作經驗優先)"},
                  {"value":"helper_award","label":"頒獎小組(已有相關工作經驗優先)"},
                  {"value":"general","label":"總務小組"},{"value":"venue_setup","label":"場地佈置"}
                 ]'
            ],
            ['organization_id'=>0,'key'=>'regions','value'=>
                '[
                    {"value":"F","label":"花地瑪堂區"},
                    {"value":"A","label":"聖安多尼堂區"},
                    {"value":"S","label":"大堂區"},
                    {"value":"Z","label":"望德堂區"},
                    {"value":"L","label":"風順堂區"},
                    {"value":"C","label":"嘉模堂區(氹仔)"},
                    {"value":"F","label":"聖方濟各堂區(路環)"}
                ]'
            ]
        ];
        foreach($data as $d){
            DB::table('configs')->insert($d);
            //Config::create($d);
        }
    }
}
