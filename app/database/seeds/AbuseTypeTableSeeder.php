<?php
class AbuseTypeTableSeeder extends Seeder {

    public function run()
    {
        // !!! All existing users are deleted !!!
        DB::table('abuseTypes')->delete();

        AbuseType::create(array(
            'type' => 'physical'
        ));
       
    }
}
