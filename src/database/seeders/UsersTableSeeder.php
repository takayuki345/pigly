<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $content = [
            'name' => 'test',
            'email' => 'test@test',
            // 'password' => 'testtest'
            'password' => \Hash::make('testtest')
        ];
        DB::table('users')->insert($content);
    }

}
