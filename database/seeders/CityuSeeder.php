<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Organization;
use App\Models\User;
use App\Models\Team;
use App\Models\Member;

class CityuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            ['family_name'=>'徐','given_name'=>'小舒','display_name'=>'徐小舒','mobile'=>'13758710957','email'=>'cityu1@example.com','password'=>'10957'],
            ['family_name'=>'申','given_name'=>'俊丽','display_name'=>'申俊丽','mobile'=>'19358593081','email'=>'cityu2@example.com','password'=>'93081'],
            ['family_name'=>'陈','given_name'=>'晓宇','display_name'=>'陈晓宇','mobile'=>'13661711415','email'=>'cityu3@example.com','password'=>'11415'],
            ['family_name'=>'魏','given_name'=>'佩珊','display_name'=>'魏佩珊','mobile'=>'18063962813','email'=>'cityu4@example.com','password'=>'62813'],
            ['family_name'=>'涂','given_name'=>'艾林','display_name'=>'涂艾林','mobile'=>'19578199741','email'=>'cityu5@example.com','password'=>'99741'],
            ['family_name'=>'叶','given_name'=>'佳林','display_name'=>'叶佳林','mobile'=>'18857127761','email'=>'kermet@qq.com','password'=>'27761'],
            ['family_name'=>'刘','given_name'=>'映','display_name'=>'刘映','mobile'=>'18688868936','email'=>'283442435@qq.com','password'=>'68936'],
            ['family_name'=>'童','given_name'=>'敏君','display_name'=>'童敏君','mobile'=>'15905050586','email'=>'47843047@qq.com','password'=>'50586'],
            ['family_name'=>'高','given_name'=>'晶','display_name'=>'高晶','mobile'=>'18666989616','email'=>'gj05@qq.com','password'=>'89616'],
            ['family_name'=>'张','given_name'=>'青','display_name'=>'张青','mobile'=>'13872311048','email'=>'328842120@qq.com','password'=>'11048'],
            ['family_name'=>'胡','given_name'=>'加思','display_name'=>'胡加思','mobile'=>'19907471177','email'=>'jessiehu727@163.com','password'=>'71177'],
            ['family_name'=>'喻','given_name'=>'亮','display_name'=>'喻亮','mobile'=>'13506060430','email'=>'516095134@qq.com','password'=>'60430'],
            ['family_name'=>'李','given_name'=>'英','display_name'=>'李英','mobile'=>'13790380101/13548956269','email'=>'280242734@qq.com','password'=>'56269'],
            ['family_name'=>'刘','given_name'=>'影','display_name'=>'刘影','mobile'=>'15802382298','email'=>'29462481@qq.com','password'=>'82298'],
            ['family_name'=>'刘','given_name'=>'龙庆','display_name'=>'刘龙庆','mobile'=>'13161970697','email'=>'lqliu1997@163.com','password'=>'70697'],
            ['family_name'=>'王','given_name'=>'业欣','display_name'=>'王业欣','mobile'=>'13397077880','email'=>'wangyexin37@163.com','password'=>'77880'],
            ['family_name'=>'张','given_name'=>'玲玲','display_name'=>'张玲玲','mobile'=>'13599600563','email'=>'327057918@qq.com','password'=>'00563'],
            ['family_name'=>'许','given_name'=>'育铭','display_name'=>'许育铭','mobile'=>'13728023921','email'=>'380891302@qq.com','password'=>'23921'],
            ['family_name'=>'胡','given_name'=>'骁','display_name'=>'胡骁','mobile'=>'13926449456','email'=>'313614575@qq.com','password'=>'49456'],
            ['family_name'=>'梁','given_name'=>'煜锟','display_name'=>'梁煜锟','mobile'=>'13726253961','email'=>'173590203@qq.com','password'=>'53961'],
            ['family_name'=>'王','given_name'=>'素琴','display_name'=>'王素琴','mobile'=>'13280001095','email'=>'cityu6@example.com','password'=>'01095'],
            ['family_name'=>'马','given_name'=>'燕霞','display_name'=>'马燕霞','mobile'=>'13694251309','email'=>'cityu7@example.com','password'=>'51309'],
            ['family_name'=>'林','given_name'=>'子睿','display_name'=>'林子睿','mobile'=>'13349942231','email'=>'691499871@qq.com','password'=>'42231'],
            ['family_name'=>'王','given_name'=>'玉','display_name'=>'王玉','mobile'=>'13631485260','email'=>'562206851@qq.com','password'=>'85260'],
            ['family_name'=>'萧','given_name'=>'琳','display_name'=>'萧琳','mobile'=>'18666903169','email'=>'cityu8@example.com','password'=>'03169'],
            ['family_name'=>'孔','given_name'=>'德婧','display_name'=>'孔德婧','mobile'=>'15625008779','email'=>'468868860@qq.com','password'=>'08779'],
            ['family_name'=>'杨','given_name'=>'海华','display_name'=>'杨海华','mobile'=>'13402597770','email'=>'23776882@qq.com','password'=>'97770'],
            ['family_name'=>'林','given_name'=>'淼','display_name'=>'林淼','mobile'=>'13570436805','email'=>'85643343@qq.com','password'=>'36805'],
            ['family_name'=>'杨','given_name'=>'颖虹','display_name'=>'杨颖虹','mobile'=>'66863654','email'=>'lydiapps@hotmai.com','password'=>'63654'],
            ['family_name'=>'王','given_name'=>'雅','display_name'=>'王雅','mobile'=>'13924904430','email'=>'641283455@qq.com','password'=>'04430'],
            ['family_name'=>'贺','given_name'=>'颖','display_name'=>'贺颖','mobile'=>'13926992838','email'=>'3123279@qq.com','password'=>'92838'],
            ['family_name'=>'欧','given_name'=>'启忠','display_name'=>'欧启忠','mobile'=>'13977106336','email'=>'13977106336@qq.com','password'=>'06336'],
            ['family_name'=>'吕','given_name'=>'晓慧','display_name'=>'吕晓慧','mobile'=>'13809232256','email'=>'1429510628@qq.com','password'=>'32256'],
            ['family_name'=>'张','given_name'=>'希','display_name'=>'张希','mobile'=>'13883367792','email'=>'cityu9@example.com','password'=>'67792'],
            ['family_name'=>'谷','given_name'=>'曼','display_name'=>'谷曼','mobile'=>'13008894778','email'=>'guman0930@163.com','password'=>'94778'],
            ['family_name'=>'杨','given_name'=>'华迪','display_name'=>'杨华迪','mobile'=>'18801032330','email'=>'huadi.yang@gmail.com','password'=>'32330'],
            ['family_name'=>'黄','given_name'=>'丽萍','display_name'=>'黄丽萍','mobile'=>'13358218515','email'=>'cityu10@example.com','password'=>'18515'],
            ['family_name'=>'王','given_name'=>'珏','display_name'=>'王珏','mobile'=>'18382381465','email'=>'cherry2wang@hotmail.com','password'=>'81465'],
            ['family_name'=>'郭','given_name'=>'沄','display_name'=>'郭沄','mobile'=>'17320055833','email'=>'guoxiaoyun06@163.com','password'=>'55833'],
            ['family_name'=>'张','given_name'=>'畅','display_name'=>'张畅','mobile'=>'15820419584','email'=>'85623589@qq.com','password'=>'19584'],
            ['family_name'=>'李','given_name'=>'珍珍','display_name'=>'李珍珍','mobile'=>'18028615641','email'=>'654069448@qq.com','password'=>'15641'],
            ['family_name'=>'钟','given_name'=>'平','display_name'=>'钟平','mobile'=>'15626177231','email'=>'cityu11@example.com','password'=>'77231'],
            ['family_name'=>'鲁','given_name'=>'先志','display_name'=>'鲁先志','mobile'=>'13658363052','email'=>'455792420@qq.com','password'=>'63052'],
            ['family_name'=>'张','given_name'=>'明','display_name'=>'张明','mobile'=>'15626168598/63509557','email'=>'825945126@qq.com','password'=>'09557'],
            ['family_name'=>'马','given_name'=>'莅夏','display_name'=>'马莅夏','mobile'=>'13392981238','email'=>'cityu12@example.com','password'=>'81238'],
            ['family_name'=>'朱','given_name'=>'娟','display_name'=>'朱娟','mobile'=>'18198274778','email'=>'54881882@qq.com','password'=>'74778'],
            ['family_name'=>'郑','given_name'=>'兰','display_name'=>'郑兰','mobile'=>'13510140328','email'=>'66706840@qq.com','password'=>'40328'],
            ['family_name'=>'冯','given_name'=>'若熙','display_name'=>'冯若熙','mobile'=>'17765954194','email'=>'13120003588@163.com','password'=>'54194'],
            ['family_name'=>'龚','given_name'=>'玉清','display_name'=>'龚玉清','mobile'=>'13676013205','email'=>'392582204@qq.com','password'=>'13205'],
            ['family_name'=>'姜','given_name'=>'梅芳','display_name'=>'姜梅芳','mobile'=>'13729033355','email'=>'cityu13@example.com','password'=>'33355'],
            ['family_name'=>'唐','given_name'=>'瑗彬','display_name'=>'唐瑗彬','mobile'=>'13977381505','email'=>'cityu14@example.com','password'=>'81505'],
            ['family_name'=>'伊','given_name'=>'剑','display_name'=>'伊剑','mobile'=>'15001257717','email'=>'cityu15@example.com','password'=>'57717'],
            ['family_name'=>'向','given_name'=>'美丽','display_name'=>'向美丽','mobile'=>'15820598659','email'=>'125983718@qq.com','password'=>'98659'],
            ['family_name'=>'温','given_name'=>'文华','display_name'=>'温文华','mobile'=>'15625012784','email'=>'575619157@qq.com','password'=>'12784'],
            ['family_name'=>'石','given_name'=>'秀选','display_name'=>'石秀选','mobile'=>'15013677660','email'=>'sxx@szu.edu.cn','password'=>'77660'],
            ['family_name'=>'甘','given_name'=>'露','display_name'=>'甘露','mobile'=>'13509625544','email'=>'ganlu755@qq.com','password'=>'25544'],
            ['family_name'=>'崔','given_name'=>'冬艳','display_name'=>'崔冬艳','mobile'=>'13380206805','email'=>'cityu16@example.com','password'=>'06805'],
            ['family_name'=>'陆','given_name'=>'钰莹','display_name'=>'陆钰莹','mobile'=>'18677170260','email'=>'97193366@qq.com','password'=>'70260'],
            ['family_name'=>'钟','given_name'=>'华海','display_name'=>'钟华海','mobile'=>'18666381529','email'=>'281763499@qq.com','password'=>'81529'],
            ['family_name'=>'何','given_name'=>'紫韵','display_name'=>'何紫韵','mobile'=>'15989228027','email'=>'81848150@qq.com','password'=>'28027'],
            ['family_name'=>'周','given_name'=>'剑铭','display_name'=>'周剑铭','mobile'=>'13357834500','email'=>'793087936@qq.com','password'=>'34500'],
            ['family_name'=>'陈','given_name'=>'燕敏','display_name'=>'陈燕敏','mobile'=>'13926044226','email'=>'642156141@qq.com','password'=>'44226'],
            ['family_name'=>'徐','given_name'=>'学','display_name'=>'徐学','mobile'=>'15917178987','email'=>'39218325@qq.com','password'=>'78987'],
            ['family_name'=>'常','given_name'=>'华苹','display_name'=>'常华苹','mobile'=>'18214692525','email'=>'1581061615@qq.com','password'=>'92525'],
            ['family_name'=>'刘','given_name'=>'贝妮','display_name'=>'刘贝妮','mobile'=>'13631306813','email'=>'591671386@qq.com','password'=>'06813'],
            ['family_name'=>'郑','given_name'=>'桂卿','display_name'=>'郑桂卿','mobile'=>'66332882','email'=>'ably38@yahoo.com','password'=>'32882'],
            ['family_name'=>'刘','given_name'=>'艳艳','display_name'=>'刘艳艳','mobile'=>'18318163811','email'=>'39258058@qq.com','password'=>'63811'],
            ['family_name'=>'黄','given_name'=>'彦琪','display_name'=>'黄彦琪','mobile'=>'13750092370','email'=>'274497956@qq.com','password'=>'92370'],
            ['family_name'=>'李','given_name'=>'红星','display_name'=>'李红星','mobile'=>'13928058888','email'=>'66786666@qq.com','password'=>'58888'],
            ['family_name'=>'张','given_name'=>'明玥','display_name'=>'张明玥','mobile'=>'13923258588','email'=>'cityu17@example.com','password'=>'58588'],
            ['family_name'=>'张','given_name'=>'琦','display_name'=>'张琦','mobile'=>'13486583340','email'=>'1284815461@qq.com','password'=>'83340'],
            ['family_name'=>'苏','given_name'=>'宝华','display_name'=>'苏宝华','mobile'=>'13824479403','email'=>'cityu18@example.com','password'=>'79403'],
            ['family_name'=>'王','given_name'=>'远远','display_name'=>'王远远','mobile'=>'15876743850','email'=>'1121383732@qq.com','password'=>'43850'],
            ['family_name'=>'李','given_name'=>'飞武','display_name'=>'李飞武','mobile'=>'13826091865','email'=>'478821189@qq.com','password'=>'91865'],
            ['family_name'=>'徐','given_name'=>'达','display_name'=>'徐达','mobile'=>'13824469955','email'=>'26209515@qq.com','password'=>'69955'],
            ['family_name'=>'颜','given_name'=>'穗芬','display_name'=>'颜穗芬','mobile'=>'15819820897','email'=>'164539645@qq.com','password'=>'20897'],
            ['family_name'=>'付','given_name'=>'敏','display_name'=>'付敏','mobile'=>'13807042122','email'=>'janefumin@163.com','password'=>'42122'],
            ['family_name'=>'陈','given_name'=>'淑芳','display_name'=>'陈淑芳','mobile'=>'13702646672','email'=>'1021845078@qq.com','password'=>'46672'],
            ['family_name'=>'李','given_name'=>'海冬','display_name'=>'李海冬','mobile'=>'13790688965','email'=>'376926433@qq.com','password'=>'88965'],
            ['family_name'=>'谢','given_name'=>'思芹','display_name'=>'谢思芹','mobile'=>'18169351521','email'=>'cityu19@example.com','password'=>'51521'],
            ['family_name'=>'黄','given_name'=>'燕玲','display_name'=>'黄燕玲','mobile'=>'63001037','email'=>'elainewonginleng37@gmail.com','password'=>'01037'],
            ['family_name'=>'潘','given_name'=>'晗','display_name'=>'潘晗','mobile'=>'18005062828','email'=>'125940971@qq.com','password'=>'62828'],
            ['family_name'=>'余','given_name'=>'畅','display_name'=>'余畅','mobile'=>'13632498819','email'=>'164436605@qq.com','password'=>'98819'],
            ['family_name'=>'何','given_name'=>'源','display_name'=>'何源','mobile'=>'13387590027','email'=>'79981703@qq.com','password'=>'90027'],
            ['family_name'=>'吴','given_name'=>'凤英','display_name'=>'吴凤英','mobile'=>'66137750','email'=>'cityu20@example.com','password'=>'37750'],
            ['family_name'=>'邵','given_name'=>'珊珊','display_name'=>'邵珊珊','mobile'=>'18605515233','email'=>'cityu21@example.com','password'=>'15233'],
            ['family_name'=>'李','given_name'=>'海涛','display_name'=>'李海涛','mobile'=>'18664250909','email'=>'linkjoyce@163.com','password'=>'50909'],
            ['family_name'=>'李','given_name'=>'悦','display_name'=>'李悦','mobile'=>'13006620583','email'=>'cityu22@example.com','password'=>'20583'],
            ['family_name'=>'陈','given_name'=>'军','display_name'=>'陈军','mobile'=>'13580439869','email'=>'93725791@qq.com','password'=>'39869'],
            ['family_name'=>'单','given_name'=>'长君','display_name'=>'单长君','mobile'=>'18673356769','email'=>'22454837@qq.com','password'=>'56769'],
            ['family_name'=>'苏','given_name'=>'汉威','display_name'=>'苏汉威','mobile'=>'62207915','email'=>'m21092105033@cityu.mo','password'=>'07915'],
            ['family_name'=>'李','given_name'=>'思玲','display_name'=>'李思玲','mobile'=>'13531813976','email'=>'2290233655@qq.com','password'=>'13976'],
            ['family_name'=>'向','given_name'=>'璐','display_name'=>'向璐','mobile'=>'13059380315','email'=>'1279305910@qq.com','password'=>'80315'],
            ['family_name'=>'张','given_name'=>'薇','display_name'=>'张薇','mobile'=>'13611201150','email'=>'cityu23@example.com','password'=>'01150'],
            ['family_name'=>'邓','given_name'=>'卉菲','display_name'=>'邓卉菲','mobile'=>'63563922','email'=>'hfdengnatti@163.com','password'=>'63922'],
            ['family_name'=>'姚','given_name'=>'云龙','display_name'=>'姚云龙','mobile'=>'18508407389','email'=>'505502058@qq.com','password'=>'07389'],
            ['family_name'=>'吴','given_name'=>'黎','display_name'=>'吴黎','mobile'=>'13727251145','email'=>'wlzq201007@163.com','password'=>'51145'],
            ['family_name'=>'高','given_name'=>'嘉庆','display_name'=>'高嘉庆','mobile'=>'13816981026','email'=>'171097994@qq.com','password'=>'81026'],
            ['family_name'=>'冉','given_name'=>'克宁','display_name'=>'冉克宁','mobile'=>'13428733061','email'=>'502727336@qq.com','password'=>'33061'],
            ['family_name'=>'卢','given_name'=>'杰桦','display_name'=>'卢杰桦','mobile'=>'65791422','email'=>'kitwalou@gmail.com','password'=>'91422'],
            ['family_name'=>'李','given_name'=>'刚','display_name'=>'李刚','mobile'=>'13512532241','email'=>'13512532241@163.com','password'=>'32241'],
            ['family_name'=>'林','given_name'=>'吴晓珊','display_name'=>'林吴晓珊','mobile'=>'66323630','email'=>'belindanglam@gmail.com','password'=>'23630'],
            ['family_name'=>'卢','given_name'=>'子健','display_name'=>'卢子健','mobile'=>'66610636','email'=>'cityu24@example.com','password'=>'10636'],
            ['family_name'=>'高','given_name'=>'亚娟','display_name'=>'高亚娟','mobile'=>'15992600908','email'=>'yjgao@126.com','password'=>'00908'],
            ['family_name'=>'李','given_name'=>'靓','display_name'=>'李靓','mobile'=>'15773862701','email'=>'2533521895@qq.com','password'=>'62701'],
            ['family_name'=>'王','given_name'=>'艳','display_name'=>'王艳','mobile'=>'15122470145','email'=>'550757465@qq.com','password'=>'70145'],
            ['family_name'=>'徐','given_name'=>'倩华','display_name'=>'徐倩华','mobile'=>'85366288212','email'=>'m22092105059@cityu.mo','password'=>'88212'],
            ['family_name'=>'宋','given_name'=>'敏','display_name'=>'宋敏','mobile'=>'63419208','email'=>'cityu25@example.com','password'=>'19208'],
            ['family_name'=>'陈','given_name'=>'娅婕','display_name'=>'陈娅婕','mobile'=>'18855058515','email'=>'1785783678@qq.com','password'=>'58515'],
            ['family_name'=>'王','given_name'=>'雪倩','display_name'=>'王雪倩','mobile'=>'13858183168','email'=>'549506003@qq.com','password'=>'83168'],
            ['family_name'=>'周','given_name'=>'鸿','display_name'=>'周鸿','mobile'=>'18161271931','email'=>'cityu26@example.com','password'=>'71931'],
            ['family_name'=>'罗','given_name'=>'卓衡','display_name'=>'罗卓衡','mobile'=>'15992622229','email'=>'cityu27@example.com','password'=>'22229'],
            ['family_name'=>'曹','given_name'=>'乐怡','display_name'=>'曹乐怡','mobile'=>'13825634388','email'=>'18977145@qq.com','password'=>'34388'],
            ['family_name'=>'崔','given_name'=>'冬鸣','display_name'=>'崔冬鸣','mobile'=>'13322807758','email'=>'13322807758@163.com','password'=>'07758'],
            ['family_name'=>'陈','given_name'=>'小尘','display_name'=>'陈小尘','mobile'=>'18674837925','email'=>'cityu28@example.com','password'=>'37925'],
            ['family_name'=>'刘','given_name'=>'佳','display_name'=>'刘佳','mobile'=>'13570665156','email'=>'cityu29@example.com','password'=>'65156'],
            ['family_name'=>'连','given_name'=>'翔','display_name'=>'连翔','mobile'=>'15106099561','email'=>'lx@qzygz.edu.cn','password'=>'99561'],
            ['family_name'=>'周','given_name'=>'宇函','display_name'=>'周宇函','mobile'=>'13903649766','email'=>'957336021@qq.com','password'=>'49766'],
        ];
        $organization=Organization::where('abbr','CUFEA')->first();
        forEach($data as $d){
            $user=User::create([
                'name' => $d['display_name'],
                'email' => $d['email'],
                'password' => Hash::make($d['password']),
            ]);
            $user->ownedTeams()->save(Team::forceCreate([
                'user_id' => $user->id,
                'name' => $user->name."'s Team",
                'personal_team' => true,
            ]));
            $d['organization_id']=$organization->id;
            unset($d['password']);
            $user->members()->create($d);
        }

    }
}
