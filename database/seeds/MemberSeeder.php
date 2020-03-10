<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([
            'firstname' => 'Bassey',
            'lastname' => 'Celeb',
            'email' => 'basseyceleb@yahoo.com',
            'phone_number' => "+49383838382424",
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
    }
}
