<?php
class CountryTableSeeder extends Seeder {

    public function run()
    {
        // !!! All existing users are deleted !!!
        DB::table('countryOrigen')->delete();

        CountryOrigen::create(array(
            'id'=>2,
            'name' => 'USA'
        ));
        
        CountryOrigen::create(array(
            'id'=>1,
            'name' => 'Unknown'
        ));
       
    }
}
