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

        $all_members = array('てつや', 'しばゆー', 'りょう', 'としみつ', 'ゆめまる', '虫眼鏡');

        foreach($all_members as $member){
            \App\Member::create([
                'name' => $member
            ]);
        }

        unset($all_members);
    }
}
