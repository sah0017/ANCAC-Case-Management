<?php
class ChildTableSeeder extends Seeder {

    public function run()
    {
        // !!! All existing users are deleted !!!
        DB::table('abusedChildren')->delete();

        AbusedChild::create(array(
            'id' => '1',
            'person_id'=>'1'
            
        ));
        AbusedChild::create(array(
            'id' => '2',
            'person_id'=>'2'
            
        ));
       
    }
}
