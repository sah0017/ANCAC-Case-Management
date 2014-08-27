<?php
class WorkingSchoolTableSeeder extends Seeder {

    public function run()
    {
        // !!! All existing users are deleted !!!
        DB::table('schools')->delete();

        School::create(array(
            'id' => 1,
            'name' => 'Unknown',
            'center_id' => 99
        ));
        
        School::create(array(
            'id' => 2,
            'name' => 'N/A',
            'center_id' => 99
        ));
       
    }
}