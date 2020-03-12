<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class GeneralSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {  
        DB::table('general_settings')->insert([
            'site_title'=>'Phills Treat',
            'logo_image_url'=>'/images/logo.png',
            'address_1'=>'730 NW 36th',
            'address_2'=>'349 links street',
            'city'=>'Miami',
            'state'=>'FL',
            'zipcode'=>'33127',
            'phone_number'=>'718-219-8652',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
    }
}
