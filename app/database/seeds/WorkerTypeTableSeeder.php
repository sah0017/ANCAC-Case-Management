<?php
class WorkerTypeTableSeeder extends Seeder {

    public function run()
    {
        // !!! All existing users are deleted !!!
        DB::table('workerTypes')->delete();

        WorkerType::create(array(
            'id' => 1,
            'type' => 'Case Worker',
            'center_id' => 99
        ));
       
    }
}
