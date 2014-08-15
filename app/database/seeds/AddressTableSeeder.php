<?php

class AddressTableSeeder extends Seeder {

    public function run()
    {
        // !!! All existing users are deleted !!!
        DB::table('addresses')->delete();

        Address::create(array(
            'id' => 1,
            'line1'=>'unknown',
            'city'=>'',
            'state'=>'',
            'zip'=>'',
            'phone'=>'',
            'county_id'=>1
            
        ));
       
    }
}