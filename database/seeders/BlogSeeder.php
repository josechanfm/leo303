<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('blogs')->insert([
            'organization_id' => '11',
            'user_id' => '1',
            'title' => '美食版塊',
            'description' => '歡迎會員分享自己找到的美食',
        ]);
        DB::table('blogs')->insert([
            'organization_id' => '11',
            'user_id' => '1',
            'title' => '生活版塊',
            'description' => '歡迎會員分享自己的生活趣事',
        ]);

        DB::table('blog_contents')->insert([
            'blog_id' => '1',
            'user_id' => '1',
            'reply_id' => '0',
            'title' => '皇朝下午茶',
            'content' => '今天在皇朝發現一間新的蛋糕店,非常好食,在這裡分享給大家(地址:澳門馬德里街229號珠光大廈（金龍中心）地下N座)',
        ]);

        DB::table('blog_contents')->insert([
            'blog_id' => '1',
            'user_id' => '1',
            'reply_id' => '1',
            'content' => '謝謝分享',
        ]);

        DB::table('blog_contents')->insert([
            'blog_id' => '1',
            'user_id' => '1',
            'reply_id' => '1',
            'content' => '今日我都有去買,確實不錯',
        ]);
    }
}
