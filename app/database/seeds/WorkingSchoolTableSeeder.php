<?php
class WorkingSchoolTableSeeder extends Seeder {

    public function run()
    {
        // !!! All existing users are deleted !!!
        DB::table('schools')->delete();

        School::create(array(
            'id' => 1,
            'name' => 'Alabama',
            'center_id' => 99
        ));
        
        School::create(array(
            'id' => 2,
            'name' => 'Faulkner',
            'center_id' => 99
        ));
       
    }
}