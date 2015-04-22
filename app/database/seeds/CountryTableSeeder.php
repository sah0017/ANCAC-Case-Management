<?php
class CountryTableSeeder extends Seeder {

    public function run()
    {
        // !!! All existing users are deleted !!!
        DB::table('countryOrigin')->delete();

        CountryOrigin::create(array(
            'id'=>2,
            'name' => 'USA'
        ));
        
        CountryOrigin::create(array(
            'id'=>1,
            'name' => 'Unknown'
        ));
       
    }
}
