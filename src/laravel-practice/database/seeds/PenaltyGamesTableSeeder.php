<?php

use Illuminate\Database\Seeder;

class PenaltyGamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('penalty_games')->delete();

        $all_penalty_games = [
            [
                "name" => "3か月ファラオ",
                "content" => "ファラオのコスプレで生活する",
                "period" => "3か月",
                "status" => "実施済み",
                "video_url" => "https://www.youtube.com/watch?v=jgciB0UBxf8"
            ],
            [
                "name" => "1か月タバコ君",
                "content" => "タバコの着ぐるみを着て生活する",
                "period" => "1か月",
                "status" => "実施済み",
                "video_url" => "https://www.youtube.com/watch?v=1YrXkmYmhos&t=2s"
            ],
            [
                "name" => "2週間邪眼生活",
                "content" => "カラコンをつけて、目の周りに紋様を書く",
                "period" => "2週間",
                "status" => "実施済み",
                "video_url" => "https://www.youtube.com/watch?v=7FIkXESiQg8"
            ],
            [
                "name" => "1週間語尾「にゃん」",
                "content" => "語尾に「にゃん」をつけて生活する",
                "period" => "1週間",
                "status" => "実施済み",
                "video_url" => "https://www.youtube.com/watch?v=7FIkXESiQg8"
            ]
        ];

        $all_members = \App\Member::all()->toArray();

        foreach($all_members as $member){
            foreach($all_penalty_games as $penalty_game){
                \App\PenaltyGame::create([
                    'name' => $penalty_game['name'],
                    'content' => $penalty_game['content'],
                    'period' => $penalty_game['period'],
                    'resposible_member' => $member['name'],
                    'status' => $penalty_game['status'],
                    'video_url' => $penalty_game['video_url']
                ]);
            }
        }

        unset($all_members);
        unset($all_penalty_games);
    }
}
