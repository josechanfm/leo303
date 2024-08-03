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
            ['abbr'=>'host','name_zh'=>'香港青年獅子會主會','name_en'=>'Hong Kong (Host)','subdomain'=>'host','founded_at'=>'1955-07-18','card_style'=>'card_01'],
            ['abbr'=>'kowloon','name_zh'=>'九龍青年獅子會','name_en'=>'Kowloon','subdomain'=>'kowloon','founded_at'=>'1959-06-19','card_style'=>'card_01'],
            ['abbr'=>'peninula','name_zh'=>'香港半島青年獅子會','name_en'=>'Hong Kong Peninsula','subdomain'=>'peninula','founded_at'=>'1959-10-17','card_style'=>'card_01'],
            ['abbr'=>'vitoria','name_zh'=>'香港域多利青年獅子會','name_en'=>'Victoria Hong Kong','subdomain'=>'vitoria','founded_at'=>'1961-10-29','card_style'=>'card_01'],
            ['abbr'=>'bayview','name_zh'=>'香港香島青年獅子會','name_en'=>'Bayview Hong Kong','subdomain'=>'bayview','founded_at'=>'1963-05-31','card_style'=>'card_01'],
            ['abbr'=>'castle','name_zh'=>'香港青山青年獅子會','name_en'=>'Castle Peak Hong Kong','subdomain'=>'castle','founded_at'=>'1964-01-06','card_style'=>'card_01'],
            ['abbr'=>'tai','name_zh'=>'太平山青年獅子會','name_en'=>'Tai Ping Shan','subdomain'=>'tai','founded_at'=>'1965-05-04','card_style'=>'card_01'],
            ['abbr'=>'kowloon','name_zh'=>'北九龍青年獅子會','name_en'=>'North Kowloon','subdomain'=>'kowloon','founded_at'=>'1966-08-10','card_style'=>'card_01'],
            ['abbr'=>'valley','name_zh'=>'香港快活谷青年獅子會','name_en'=>'Happy Valley','subdomain'=>'valley','founded_at'=>'1967-03-22','card_style'=>'card_01'],
            ['abbr'=>'kwun','name_zh'=>'香港觀塘青年獅子會','name_en'=>'Kwun Tong Hong Kong','subdomain'=>'kwun','founded_at'=>'1969-08-08','card_style'=>'card_01'],
            ['abbr'=>'my','name_zh'=>'澳門青年獅子會','name_en'=>'Macau Youth','subdomain'=>'my','founded_at'=>'1971-11-01','card_style'=>'card_01'],
            ['abbr'=>'tst','name_zh'=>'香港尖沙咀青年獅子會','name_en'=>'Tsim Sha Tsui, Hong Kong','subdomain'=>'tst','founded_at'=>'1975-01-06','card_style'=>'card_01'],
            ['abbr'=>'peak','name_zh'=>'香港鑪峯青年獅子會','name_en'=>'The Peak','subdomain'=>'peak','founded_at'=>'1975-03-11','card_style'=>'card_01'],
            ['abbr'=>'ke','name_zh'=>'香港東九龍青年獅子會','name_en'=>'Kowloon East, Hong Kong','subdomain'=>'ke','founded_at'=>'1975-09-08','card_style'=>'card_01'],
            ['abbr'=>'lionrock','name_zh'=>'香港獅子山青年獅子會','name_en'=>'Lion Rock Hong Kong','subdomain'=>'lionrock','founded_at'=>'1976-01-05','card_style'=>'card_01'],
            ['abbr'=>'sk','name_zh'=>'南九龍青年獅子會','name_en'=>'South Kowloon','subdomain'=>'sk','founded_at'=>'1976-01-23','card_style'=>'card_01'],
            ['abbr'=>'city','name_zh'=>'香港城市青年獅子會','name_en'=>'The City','subdomain'=>'city','founded_at'=>'1976-01-23','card_style'=>'card_01'],
            ['abbr'=>'kt','name_zh'=>'九龍塘青年獅子會','name_en'=>'Kowloon Tong','subdomain'=>'kt','founded_at'=>'1976-02-19','card_style'=>'card_01'],
            ['abbr'=>'wk','name_zh'=>'西九龍青年獅子會','name_en'=>'West Kowloon','subdomain'=>'wk','founded_at'=>'1976-04-27','card_style'=>'card_01'],
            ['abbr'=>'hks','name_zh'=>'香港港南青年獅子會','name_en'=>'Hong Kong South','subdomain'=>'hks','founded_at'=>'1977-03-09','card_style'=>'card_01'],
            ['abbr'=>'nt','name_zh'=>'香港新界青年獅子會','name_en'=>'The New Territories, Hong Kong','subdomain'=>'nt','founded_at'=>'1977-06-15','card_style'=>'card_01'],
            ['abbr'=>'hke','name_zh'=>'港東青年獅子會','name_en'=>'Hong Kong East','subdomain'=>'hke','founded_at'=>'1977-07-18','card_style'=>'card_01'],
            ['abbr'=>'queensay','name_zh'=>'香港金鐘青年獅子會','name_en'=>'Queensway, Hong Kong','subdomain'=>'queensay','founded_at'=>'1978-12-11','card_style'=>'card_01'],
            ['abbr'=>'beacon','name_zh'=>'香港筆架山青年獅子會','name_en'=>'Beacon Hill','subdomain'=>'beacon','founded_at'=>'1979-01-31','card_style'=>'card_01'],
            ['abbr'=>'hkw','name_zh'=>'香港西區青年獅子會','name_en'=>'Hong Kong West','subdomain'=>'hkw','founded_at'=>'1979-07-02','card_style'=>'card_01'],
            ['abbr'=>'hki','name_zh'=>'港島青年獅子會','name_en'=>'Hong Kong Island','subdomain'=>'hki','founded_at'=>'1980-03-26','card_style'=>'card_01'],
            ['abbr'=>'braemar','name_zh'=>'寶馬山青年獅子會','name_en'=>'Braemar Hill','subdomain'=>'braemar','founded_at'=>'1980-05-19','card_style'=>'card_01'],
            ['abbr'=>'shatin','name_zh'=>'香港沙田青年獅子會','name_en'=>'Shatin, Hong Kong','subdomain'=>'shatin','founded_at'=>'1981-05-27','card_style'=>'card_01'],
            ['abbr'=>'cameron','name_zh'=>'金馬倫山青年獅子會','name_en'=>'Mount Cameron','subdomain'=>'cameron','founded_at'=>'1981-06-11','card_style'=>'card_01'],
            ['abbr'=>'hkn','name_zh'=>'香港北區青年獅子會','name_en'=>'Hong Kong North','subdomain'=>'hkn','founded_at'=>'1982-07-06','card_style'=>'card_01'],
            ['abbr'=>'yl','name_zh'=>'元朗青年獅子會','name_en'=>'Yuen Long','subdomain'=>'yl','founded_at'=>'1985-06-06','card_style'=>'card_01'],
            ['abbr'=>'phoenix','name_zh'=>'香港鳳凰青年獅子會','name_en'=>'Phoenix Hong Kong','subdomain'=>'phoenix','founded_at'=>'1988-01-15','card_style'=>'card_01'],
            ['abbr'=>'bauhinia','name_zh'=>'紫荊青年獅子會','name_en'=>'Bauhinia','subdomain'=>'bauhinia','founded_at'=>'1988-03-09','card_style'=>'card_01'],
            ['abbr'=>'tm','name_zh'=>'屯門青年獅子會','name_en'=>'Tuen Mun','subdomain'=>'tm','founded_at'=>'1989-08-25','card_style'=>'card_01'],
            ['abbr'=>'pacific','name_zh'=>'香港太平洋青年獅子會','name_en'=>'Hong Kong (Pacific)','subdomain'=>'pacific','founded_at'=>'1990-01-16','card_style'=>'card_01'],
            ['abbr'=>'centruion','name_zh'=>'香港百俊青年獅子會','name_en'=>'The Centurion','subdomain'=>'centruion','founded_at'=>'1990-11-05','card_style'=>'card_01'],
            ['abbr'=>'tste','name_zh'=>'尖東青年獅子會','name_en'=>'Tsimshatsui East','subdomain'=>'tste','founded_at'=>'1991-07-08','card_style'=>'card_01'],
            ['abbr'=>'mc','name_zh'=>'濠江中央青年獅子會','name_en'=>'Macau Central','subdomain'=>'mc','founded_at'=>'1991-10-02','card_style'=>'card_01'],
            ['abbr'=>'silverstrand','name_zh'=>'銀綫灣青年獅子會','name_en'=>'Silverstrand','subdomain'=>'silverstrand','founded_at'=>'1991-10-18','card_style'=>'card_01'],
            ['abbr'=>'pearl','name_zh'=>'明珠青年獅子會','name_en'=>'Pearl Island','subdomain'=>'pearl','founded_at'=>'1992-05-13','card_style'=>'card_01'],
            ['abbr'=>'redhill','name_zh'=>'紅山青年獅子會','name_en'=>'Red Hill','subdomain'=>'redhill','founded_at'=>'1992-05-18','card_style'=>'card_01'],
            ['abbr'=>'repulse','name_zh'=>'香港淺水灣青年獅子會','name_en'=>'Repulse Bay Hong Kong','subdomain'=>'repulse','founded_at'=>'1992-06-04','card_style'=>'card_01'],
            ['abbr'=>'hkc','name_zh'=>'中區青年獅子會','name_en'=>'Central','subdomain'=>'hkc','founded_at'=>'1992-07-01','card_style'=>'card_01'],
            ['abbr'=>'kt','name_zh'=>'葵青青年獅子會','name_en'=>'Kwai Tsing','subdomain'=>'kt','founded_at'=>'1993-04-13','card_style'=>'card_01'],
            ['abbr'=>'hkm','name_zh'=>'香港中港青年獅子會','name_en'=>'Hong Kong (Mainland)','subdomain'=>'hkm','founded_at'=>'1993-08-16','card_style'=>'card_01'],
            ['abbr'=>'hollywood','name_zh'=>'香港荷李活青年獅子會','name_en'=>'Hollywood Hong Kong','subdomain'=>'hollywood','founded_at'=>'1995-08-03','card_style'=>'card_01'],
            ['abbr'=>'metropolitan','name_zh'=>'香港華都青年獅子會','name_en'=>'Metropolitan Hong Kong','subdomain'=>'metropolitan','founded_at'=>'1995-12-05','card_style'=>'card_01'],
            ['abbr'=>'diamond','name_zh'=>'香港鑽石青年獅子會','name_en'=>'Diamond Hong Kong','subdomain'=>'diamond','founded_at'=>'1998-07-01','card_style'=>'card_01'],
            ['abbr'=>'tm','name_zh'=>'香港青馬青年獅子會','name_en'=>'Tsing Ma Hong Kong','subdomain'=>'tm','founded_at'=>'1998-12-31','card_style'=>'card_01'],
            ['abbr'=>'millennium','name_zh'=>'香港千禧青年獅子會','name_en'=>'Hong Kong Millennium','subdomain'=>'millennium','founded_at'=>'1999-10-18','card_style'=>'card_01'],
            ['abbr'=>'cp','name_zh'=>'香港特區中央青年獅子會','name_en'=>'Center Point H.K.S.A.R.','subdomain'=>'cp','founded_at'=>'2000-09-18','card_style'=>'card_01'],
            ['abbr'=>'harbour','name_zh'=>'維港青年獅子會','name_en'=>'Harbour View','subdomain'=>'harbour','founded_at'=>'2002-12-06','card_style'=>'card_01'],
            ['abbr'=>'po','name_zh'=>'香港東方之珠青年獅子會','name_en'=>'Hong Kong Pearl of the Orient','subdomain'=>'po','founded_at'=>'2003-06-11','card_style'=>'card_01'],
            ['abbr'=>'hka','name_zh'=>'香港亞洲青年獅子會','name_en'=>'Hong Kong Asia','subdomain'=>'hka','founded_at'=>'2004-01-01','card_style'=>'card_01'],
            ['abbr'=>'wc','name_zh'=>'香港灣仔青年獅子會','name_en'=>'Wan Chai, Hong Kong','subdomain'=>'wc','founded_at'=>'2004-06-28','card_style'=>'card_01'],
            ['abbr'=>'cb','name_zh'=>'銅鑼灣青年獅子會','name_en'=>'Causeway Bay','subdomain'=>'cb','founded_at'=>'2004-10-12','card_style'=>'card_01'],
            ['abbr'=>'ml','name_zh'=>'香港半山青年獅子會','name_en'=>'Mid-Levels, Hong Kong','subdomain'=>'ml','founded_at'=>'2005-02-28','card_style'=>'card_01'],
            ['abbr'=>'hmt','name_zh'=>'何文田青年獅子會','name_en'=>'Ho Man Tin','subdomain'=>'hmt','founded_at'=>'2005-03-18','card_style'=>'card_01'],
            ['abbr'=>'citizens','name_zh'=>'香港新民青年獅子會','name_en'=>'Hong Kong Citizens','subdomain'=>'citizens','founded_at'=>'2005-04-08','card_style'=>'card_01'],
            ['abbr'=>'global','name_zh'=>'香港環球青年獅子會','name_en'=>'Hong Kong Global','subdomain'=>'global','founded_at'=>'2005-05-26','card_style'=>'card_01'],
            ['abbr'=>'nte','name_zh'=>'新界東青年獅子會','name_en'=>'Hong Kong New Territories East','subdomain'=>'nte','founded_at'=>'2007-06-28','card_style'=>'card_01'],
            ['abbr'=>'shouson','name_zh'=>'香港壽臣山青年獅子會','name_en'=>'Hong Kong Shouson Hill','subdomain'=>'shouson','founded_at'=>'2009-03-28','card_style'=>'card_01'],
            ['abbr'=>'sun','name_zh'=>'香港太陽青年獅子會','name_en'=>'Hong Kong Sun','subdomain'=>'sun','founded_at'=>'2009-04-24','card_style'=>'card_01'],
            ['abbr'=>'pe','name_zh'=>'香港太子青年獅子會','name_en'=>'Hong Kong Prince Edward','subdomain'=>'pe','founded_at'=>'2009-08-18','card_style'=>'card_01'],
            ['abbr'=>'ssp','name_zh'=>'香港深水埗青年獅子會','name_en'=>'Sham Shui Po Hong Kong','subdomain'=>'ssp','founded_at'=>'2010-03-05','card_style'=>'card_01'],
            ['abbr'=>'ne','name_zh'=>'香港新時代青年獅子會','name_en'=>'Hong Kong New Era','subdomain'=>'ne','founded_at'=>'2010-09-07','card_style'=>'card_01'],
            ['abbr'=>'tw','name_zh'=>'荃灣青年獅子會','name_en'=>'Tsuen Wan','subdomain'=>'tw','founded_at'=>'2011-10-10','card_style'=>'card_01'],
            ['abbr'=>'yyc','name_zh'=>'香港又一村青年獅子會','name_en'=>'Hong Kong Yau Yat Chuen','subdomain'=>'yyc','founded_at'=>'2012-04-25','card_style'=>'card_01'],
            ['abbr'=>'fh','name_zh'=>'香港炮台山青年獅子會','name_en'=>'Hong Kong Fortress Hill','subdomain'=>'fh','founded_at'=>'2014-08-25','card_style'=>'card_01'],
            ['abbr'=>'shout','name_zh'=>'南區青年獅子會','name_en'=>'South','subdomain'=>'shout','founded_at'=>'2014-08-29','card_style'=>'card_01'],
            ['abbr'=>'elements','name_zh'=>'圓方青年獅子會','name_en'=>'Hong Kong Elements','subdomain'=>'elements','founded_at'=>'2015-01-01','card_style'=>'card_01'],
            ['abbr'=>'fairview','name_zh'=>'錦繡青年獅子會','name_en'=>'Hong Kong Fairview','subdomain'=>'fairview','founded_at'=>'2015-02-08','card_style'=>'card_01'],
            ['abbr'=>'kb','name_zh'=>'九龍灣青年獅子會','name_en'=>'Kowloon Bay Hong Kong','subdomain'=>'kb','founded_at'=>'2015-05-28','card_style'=>'card_01'],
            ['abbr'=>'ytm','name_zh'=>'香港油尖旺青年獅子會','name_en'=>'Hong Kong Yau Tsim Mong','subdomain'=>'ytm','founded_at'=>'2015-07-23','card_style'=>'card_01'],
            ['abbr'=>'ntw','name_zh'=>'香港新界西青年獅子會','name_en'=>'Hong Kong New Territories West','subdomain'=>'ntw','founded_at'=>'2015-08-27','card_style'=>'card_01'],
            ['abbr'=>'ctc','name_zh'=>'香港中華傳統文化青年獅子會','name_en'=>'Hong Kong Chinese Traditional Culture','subdomain'=>'ctc','founded_at'=>'2015-09-21','card_style'=>'card_01'],
            ['abbr'=>'tp','name_zh'=>'大埔青年獅子會','name_en'=>'Tai Po','subdomain'=>'tp','founded_at'=>'2016-03-21','card_style'=>'card_01'],
            ['abbr'=>'cp','name_zh'=>'香港百盛青年獅子會','name_en'=>'Hong Kong Centennial Passion','subdomain'=>'cp','founded_at'=>'2016-06-30','card_style'=>'card_01'],
            ['abbr'=>'mdc','name_zh'=>'摩星嶺青年獅子會','name_en'=>'Mt Davis Centennial','subdomain'=>'mdc','founded_at'=>'2016-06-30','card_style'=>'card_01'],
            ['abbr'=>'morrison','name_zh'=>'香港摩利臣山青年獅子會','name_en'=>'Hong Kong Morrison Hill','subdomain'=>'morrison','founded_at'=>'2016-07-29','card_style'=>'card_01'],
            ['abbr'=>'kc','name_zh'=>'九龍城青年獅子會','name_en'=>'Kowloon City','subdomain'=>'kc','founded_at'=>'2016-09-14','card_style'=>'card_01'],
            ['abbr'=>'sk','name_zh'=>'香港西貢青年獅子會','name_en'=>'Hong Kong Sai Kung','subdomain'=>'sk','founded_at'=>'2016-11-07','card_style'=>'card_01'],
            ['abbr'=>'gc','name_zh'=>'香港黃金海岸青年獅子會','name_en'=>'Hong Kong Gold Coast','subdomain'=>'gc','founded_at'=>'2017-02-07','card_style'=>'card_01'],
            ['abbr'=>'ifc','name_zh'=>'香港國金青年獅子會','name_en'=>'Hong Kong IFC','subdomain'=>'ifc','founded_at'=>'2017-04-17','card_style'=>'card_01'],
            ['abbr'=>'tko','name_zh'=>'將軍澳青年獅子會','name_en'=>'Hong Kong Tseung Kwan O','subdomain'=>'tko','founded_at'=>'2017-05-31','card_style'=>'card_01'],
            ['abbr'=>'peace','name_zh'=>'香港和平青年獅子會','name_en'=>'Hong Kong Peace','subdomain'=>'peace','founded_at'=>'2017-07-12','card_style'=>'card_01'],
            ['abbr'=>'everest','name_zh'=>'香港浩峰青年獅子會','name_en'=>'Hong Kong Everest','subdomain'=>'everest','founded_at'=>'2017-10-25','card_style'=>'card_01'],
            ['abbr'=>'stars','name_zh'=>'香港星光青年獅子會','name_en'=>'Hong Kong Stars','subdomain'=>'stars','founded_at'=>'2017-11-03','card_style'=>'card_01'],
            ['abbr'=>'gba','name_zh'=>'香港大灣區青年獅子會','name_en'=>'Hong Kong Greater Bay Area','subdomain'=>'gba','founded_at'=>'2018-04-06','card_style'=>'card_01'],
            ['abbr'=>'huaxia','name_zh'=>'香港華夏青年獅子會','name_en'=>'Huaxia Hong Kong','subdomain'=>'huaxia','founded_at'=>'2018-07-12','card_style'=>'card_01'],
            ['abbr'=>'joy','name_zh'=>'香港行樂青年獅子會','name_en'=>'Hong Kong Joy','subdomain'=>'joy','founded_at'=>'2019-04-24','card_style'=>'card_01'],
            ['abbr'=>'br','name_zh'=>'香港一帶一路青年獅子會','name_en'=>'Hong Kong Belt and Road','subdomain'=>'br','founded_at'=>'2019-06-30','card_style'=>'card_01'],
            ['abbr'=>'signature','name_zh'=>'香港深灣青年獅子會','name_en'=>'Hong Kong Signature','subdomain'=>'signature','founded_at'=>'2020-06-10','card_style'=>'card_01'],
            ['abbr'=>'kts','name_zh'=>'九肚山青年獅子會','name_en'=>'Kau To Shan','subdomain'=>'kts','founded_at'=>'2020-09-09','card_style'=>'card_01'],
            ['abbr'=>'elites','name_zh'=>'名仁青年獅子會','name_en'=>'Hong Kong Elites','subdomain'=>'elites','founded_at'=>'2021-06-10','card_style'=>'card_01'],
            ['abbr'=>'jardines','name_zh'=>'香港渣甸山青年獅子會','name_en'=>'Hong Kong Jardines Lookout','subdomain'=>'jardines','founded_at'=>'2021-07-13','card_style'=>'card_01'],
            ['abbr'=>'mp','name_zh'=>'米埔青年獅子會','name_en'=>'Hong Kong Mai Po','subdomain'=>'mp','founded_at'=>'2021-07-13','card_style'=>'card_01'],
            ['abbr'=>'prominent','name_zh'=>'香港聚賢青年獅子會','name_en'=>'Hong Kong Prominent','subdomain'=>'prominent','founded_at'=>'2021-07-16','card_style'=>'card_01'],
            ['abbr'=>'sp','name_zh'=>'香港科學園青年獅子會','name_en'=>'Hong Kong Science Park','subdomain'=>'sp','founded_at'=>'2021-08-11','card_style'=>'card_01'],
            ['abbr'=>'nkt','name_zh'=>'香港新啟德青年獅子會','name_en'=>'Hong Kong New Kai Tak','subdomain'=>'nkt','founded_at'=>'2021-08-24','card_style'=>'card_01'],
            ['abbr'=>'olympic','name_zh'=>'香港奧運青年獅子會','name_en'=>'Hong Kong Olympic','subdomain'=>'olympic','founded_at'=>'2022-02-17','card_style'=>'card_01'],
            ['abbr'=>'nm','name_zh'=>'香港北部都會青年獅子會','name_en'=>'Hong Kong Northern Metropolis','subdomain'=>'nm','founded_at'=>'2022-03-02','card_style'=>'card_01'],
            ['abbr'=>'uf','name_zh'=>'香港博愛青年獅子會','name_en'=>'Hong Kong Universal Fraternity','subdomain'=>'uf','founded_at'=>'2022-03-30','card_style'=>'card_01'],
            ['abbr'=>'alba','name_zh'=>'香港朝陽青年獅子會','name_en'=>'Hong Kong Alba','subdomain'=>'alba','founded_at'=>'2022-04-28','card_style'=>'card_01'],
            ['abbr'=>'cwb','name_zh'=>'香港清水灣青年獅子會','name_en'=>'Hong Kong Clear Water Bay','subdomain'=>'cwb','founded_at'=>'2022-07-22','card_style'=>'card_01'],
            ['abbr'=>'tc','name_zh'=>'香港東涌青年獅子會','name_en'=>'Hong Kong Tung Chung','subdomain'=>'tc','founded_at'=>'2022-09-27','card_style'=>'card_01'],
            ['abbr'=>'clk','name_zh'=>'香港赤鱲角青年獅子會','name_en'=>'Hong Kong Chek Lap Kok','subdomain'=>'clk','founded_at'=>'2022-10-07','card_style'=>'card_01'],
            ['abbr'=>'en','name_zh'=>'香港尖山青年獅子會','name_en'=>'Hong Kong Eagles Nest','subdomain'=>'en','founded_at'=>'2022-10-12','card_style'=>'card_01'],
            ['abbr'=>'aberdeen','name_zh'=>'香港仔青年獅子會','name_en'=>'Hong Kong Aberdeen','subdomain'=>'aberdeen','founded_at'=>'2022-11-03','card_style'=>'card_01'],
            ['abbr'=>'es','name_zh'=>'香港精英運動青年獅子會','name_en'=>'Hong Kong Elite Sports','subdomain'=>'es','founded_at'=>'2023-01-18','card_style'=>'card_01'],
            ['abbr'=>'mk','name_zh'=>'香港加列山青年獅子會','name_en'=>'Hong Kong Mt Kellett','subdomain'=>'mk','founded_at'=>'2023-06-14','card_style'=>'card_01'],
            ['abbr'=>'rosewood','name_zh'=>'香港樂活青年獅子會','name_en'=>'Hong Kong Rosewood','subdomain'=>'rosewood','founded_at'=>'2023-06-16','card_style'=>'card_01'],
            ['abbr'=>'peak','name_zh'=>'飛鵝山青年獅子會','name_en'=>'Kowloon Peak','subdomain'=>'peak','founded_at'=>'2023-10-18','card_style'=>'card_01'],
            ['abbr'=>'kadoorie','name_zh'=>'香港加多利山青年獅子會','name_en'=>'Hong Kong Kadoorie Hill','subdomain'=>'kadoorie','founded_at'=>'2023-10-20','card_style'=>'card_01'],
            ['abbr'=>'wts','name_zh'=>'香港黃大仙青年獅子會','name_en'=>'Hong Kong Wong Tai Sin','subdomain'=>'wts','founded_at'=>'2023-12-07','card_style'=>'card_01'],
            ['abbr'=>'lotus','name_zh'=>'澳門蓮花青年獅子會','name_en'=>'Macao Lotus','subdomain'=>'lotus','founded_at'=>'2024-02-13','card_style'=>'card_01'],
            ['abbr'=>'dragon','name_zh'=>'香港龍山青年獅子會','name_en'=>'Hong Kong Dragon Hill','subdomain'=>'dragon','founded_at'=>'2024-03-07','card_style'=>'card_01'],
            ['abbr'=>'cambodia','name_zh'=>'香港柬埔寨青年獅子會','name_en'=>'Hong Kong Cambodia','subdomain'=>'cambodia','founded_at'=>'2024-03-29','card_style'=>'card_01'],
            ['abbr'=>'glenealy','name_zh'=>'香港鐵崗青年獅子會','name_en'=>'Hong Kong Glenealy','subdomain'=>'glenealy','founded_at'=>'2024-05-29','card_style'=>'card_01'],
            ['abbr'=>'soho','name_zh'=>'香港蘇豪青年獅子會','name_en'=>'Hong Kong Soho','subdomain'=>'soho','founded_at'=>'2024-05-31','card_style'=>'card_01'],
            ['abbr'=>'telents','name_zh'=>'香港高才聯青年獅子會','name_en'=>'Hong Kong Top Talents','subdomain'=>'telents','founded_at'=>'2024-05-31','card_style'=>'card_01'],
            ['abbr'=>'jade','name_zh'=>'香港翡翠青年獅子會','name_en'=>'Hong Kong Jade','subdomain'=>'jade','founded_at'=>'2024-06-05','card_style'=>'card_01'],
            ['abbr'=>'youths','name_zh'=>'香港青賢青年獅子會','name_en'=>'Hong Kong Youths','subdomain'=>'youths','founded_at'=>'2024-06-07','card_style'=>'card_01'],
        ];

        foreach($data as $org){
            Organization::create($org);
        }
        $organization=Organization::find(11);
        $user=User::where('email','organizer@example.com')->get();
        $organization->users()->attach($user);
        $user=User::where('email','member1@example.com')->get();
        $organization->users()->attach($user);

        Member::whereBetween('id',[1,3])->update(['organization_id'=>$organization->id]);
        // $member=Member::find(1);
        // $organization->members()->attach($member);
        // $member=Member::find(2);
        // $organization->members()->attach($member);
        // $member=Member::find(3);
        // $organization->members()->attach($member);


    }
}

