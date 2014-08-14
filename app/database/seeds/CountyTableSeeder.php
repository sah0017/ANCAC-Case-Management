<?php
class CountyTableSeeder extends Seeder {

    public function run()
    {
        // !!! All existing users are deleted !!!
        DB::table('counties')->delete();

        County::create(array(
            'name' => 'Montgomery'
        ));
       
    }
}
