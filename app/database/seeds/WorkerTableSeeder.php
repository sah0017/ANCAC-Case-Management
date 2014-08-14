<?php
class WorkerTableSeeder extends Seeder {

    public function run()
    {
        // !!! All existing users are deleted !!!
        DB::table('workers')->delete();

        User::create(array(
            'name' => 'Test worker',
            'workerType_id' => 1,
            'center_id' => 99
        ));
       
    }
}
