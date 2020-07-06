<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {    //created users
        DB::table('roles')->insert([
            'title' => 'admin',
          
        ]);
        DB::table('roles')->insert([
            'title' => 'employee',

        ]);
        //assigned roles
        DB::table('role_user')->insert([
            'role_id' => 1,
            'user_id' => 1,

        ]);
        DB::table('role_user')->insert([
            'role_id' => 2,
            'user_id' => 2,

        ]);
        
        // $faker = Faker::create();
        // foreach(range(1,20) as $index){
        //     DB::table('role_user')->insert([
        //         'role_id' => rand(1,2),
        //         'user_id' => $index
        //     ]);
        // }
    }
}
