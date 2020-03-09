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
    }
}
