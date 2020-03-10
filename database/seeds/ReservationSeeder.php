<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reservations')->insert([
            'firstname' => 'Victoria',
            'lastname' => 'Celeb',
            'email' => 'victoriaceleb@yahoo.com',
            'phone_number' => "+4938383837424",
            'guests_total' => 8,
            'time' => "7",
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
    }
}
