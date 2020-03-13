<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'firstname' => 'Philip',
            'lastname' => 'Sada',
            'email' => 'sadaphillip@gmail.com',
            'password' => Hash::make('12345678'),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('users')->insert([
            'firstname' => 'Philipe',
            'lastname' => 'Sadaa',
            'email' => 'sadaphillipe@gmail.com',
            'password' => Hash::make('12345678'),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        $faker = Faker::create();
        foreach(range(1,20) as $index){
            DB::table('users')->insert([
                'firstname' => $faker->firstname,
                'lastname' => $faker->lastname,
                'email' => $faker->email,
                'password' =>Hash::make('12345678'),
                'created_at'=>$faker->dateTimeThisMonth,
                'updated_at'=>$faker->dateTimeThisMonth
            ]);
        }
    }
}
