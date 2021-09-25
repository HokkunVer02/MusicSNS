<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($x=1;$x <= 100;$x++){
            DB::table('comments')->insert([
                'title' => "testタイトル{$x}",
                'content' => "sample文{$x}",
                'image' => "{$x}",
                'user_id' => "{$x}",
                'post_id' => "{$x}",
                'good' => "{$x}",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                ]);
        }
    }
}
