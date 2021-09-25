<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($x=1;$x <= 100;$x++){
            DB::table('users')->insert([
                'name' => "テストユーザー{$x}",
                'gender' => "性別{$x}",
                'age' => "{$x}",
                'address' => "{$x}",
                'comment' => "私は{$x}番目のユーザーです。",
                'email' => "test{$x}@example.com",
                'password' =>bcrypt('secret'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                ]);
        }
    }
}
