<?php
class ServiceTypeTableSeeder extends Seeder {

    public function run()
    {
        // !!! All existing users are deleted !!!
        DB::table('serviceTypes')->delete();

        ServiceType::create(array(
            'id' => 1,
            'type' => 'Forensic Interview',
            'center_id' => 99
        ));
        ServiceType::create(array(
            'id' => 2,
            'type' => 'Counseling',
            'center_id' => 99
        ));
       
    }
}