<?php
class CountryTableSeeder extends Seeder {

    public function run()
    {
        // !!! All existing users are deleted !!!
        DB::table('countryOrigen')->delete();

        County::create(array(
            'id'=>2,
            'name' => 'USA'
        ));
        
        County::create(array(
            'id'=>1,
            'name' => 'Unknown'
        ));
       
    }
}
