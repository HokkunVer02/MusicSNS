<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($x=1;$x <= 100;$x++){
            DB::table('posts')->insert([
                'title' => "テストタイトル{$x}",
                'content' => "サンプル文{$x}",
                'image_path' => "{$x}",
                'user_id' => "{$x}",
                'good' => "{$x}",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                ]);
        }
    }
}
