<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FavoritesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($x=1;$x <= 100;$x++){
            DB::table('favorites')->insert([
                'user_id' => "{$x}",
                'post_id' => "{$x}",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                ]);
        }
    }
}
