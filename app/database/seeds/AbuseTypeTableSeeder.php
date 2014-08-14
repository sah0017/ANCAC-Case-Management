<?php
class AbuseTypeTableSeeder extends Seeder {

    public function run()
    {
        // !!! All existing users are deleted !!!
        DB::table('abuseTypes')->delete();

        User::create(array(
            'type' => 'physical'
        ));
       
    }
}
