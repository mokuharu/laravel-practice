<?php

use Illuminate\Database\Seeder;

class MembersTableSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->delete();

        $all_members = [
            ["name" => "てつや", "profile_img_src" => "/images/img-tetsuya01.jpg"],
            ["name" => "しばゆー", "profile_img_src" => "/images/img-shibayu01.jpg"],
            ["name" => "りょう", "profile_img_src" => "/images/img-ryo01.jpg"],
            ["name" => "としみつ", "profile_img_src" => "/images/img-toshimitsu01.jpg"],
            ["name" => "ゆめまる", "profile_img_src" => "/images/img-yumemaru01.jpg"],
            ["name" => "虫眼鏡", "profile_img_src"  => "/images/img-mushimegane01.jpg"]
        ];

        foreach($all_members as $member){
            \App\Member::create([
                'name' => $member['name'],
                'profile_img_src' => $member['profile_img_src']
            ]);
        }

        unset($all_members);
    }
}
