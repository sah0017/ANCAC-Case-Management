<?php
class WorkerTableSeeder extends Seeder {

    public function run()
    {
        // !!! All existing users are deleted !!!
        DB::table('workers')->delete();

        Worker::create(array(
            'id' => 1,
            'name' => 'Super Admin',
            'workerType_id' => 1,
            'center_id' => 99
        ));
        
        Worker::create(array(
            'id' => 2,
            'name' => 'Super Viewer',
            'workerType_id' => 1,
            'center_id' => 99
        ));
        
        Worker::create(array(
            'id' => 3,
            'name' => 'Cender Admin',
            'workerType_id' => 1,
            'center_id' => 1
        ));
        
        Worker::create(array(
            'id' => 4,
            'name' => 'User',
            'workerType_id' => 1,
            'center_id' => 1
        ));
        
        Worker::create(array(
            'id' => 5,
            'name' => 'Viewer',
            'workerType_id' => 1,
            'center_id' => 1
        ));
        Worker::create(array(
            'id' => 6,
            'name' => 'Test worker',
            'workerType_id' => 1,
            'center_id' => 1
        ));
    }
}
