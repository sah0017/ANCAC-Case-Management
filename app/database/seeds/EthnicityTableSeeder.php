<?php
class EthnicityTableSeeder extends Seeder {

    public function run()
    {
        // !!! All existing users are deleted !!!
        DB::table('ethnicities')->delete();

        Ethnicity::create(array(
            'id' => 1,
            'ethnicity' => 'Latino' 
        ));
        Ethnicity::create(array(
            'id' => 2,
            'ethnicity' => 'AfroAmerican' 
        ));
        Ethnicity::create(array(
            'id' => 3,
            'ethnicity' => 'Asian' 
        ));
       
    }
}
