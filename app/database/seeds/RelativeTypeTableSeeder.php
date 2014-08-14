<?php
class RelativeTypeTableSeeder extends Seeder {

    public function run()
    {
        // !!! All existing users are deleted !!!
        DB::table('relationTypes')->delete();

        RelationType::create(array(
            'type' => 'sisters sons uncles fiends brothers fathers third uncle twice removed'
        ));
       
    }
}