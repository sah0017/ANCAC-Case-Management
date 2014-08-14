<?php
class HouseholdTableSeeder extends Seeder {

    public function run()
    {
        // !!! All existing users are deleted !!!
        DB::table('households')->delete();

        Household::create(array(
            'id' => 1
        ));
       
    }
}