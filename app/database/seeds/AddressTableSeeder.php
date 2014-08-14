<?php

class AddressTableSeeder extends Seeder {

    public function run()
    {
        // !!! All existing users are deleted !!!
        DB::table('addresses')->delete();

        Address::create(array(
            'id' => 0,
            'line 1'=>'unknown',
            'city'=>'',
            'state'=>'',
            'zip'=>'',
            'phone'=>'',
            'county_id'=>0
            
        ));
       
    }
}