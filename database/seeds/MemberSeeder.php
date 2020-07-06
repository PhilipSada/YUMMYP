<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        // $faker = Faker::create();
        // foreach(range(1,100) as $index){
        //     DB::table('members')->insert([
        //         'firstname' => $faker->firstname,
        //         'lastname' => $faker->lastname,
        //         'email' => $faker->email,
        //         'phone_number' => $faker->phoneNumber,
        //         'created_at'=>$faker->dateTimeThisMonth,
        //         'updated_at'=>$faker->dateTimeThisMonth
        //     ]);
        // }
        DB::table('members')->insert([
            'firstname' => 'john',
            'lastname' => 'smith',
            'email' => 'johnsmith@yahoo.com',
            'phone_number' => '12345678',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
       
    }
}
