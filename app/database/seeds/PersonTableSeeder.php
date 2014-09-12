<?php
class PersonTableSeeder extends Seeder {

    public function run()
    {
        // !!! All existing users are deleted !!!
        DB::table('persons')->delete();

        Person::create(array(
            'id' => '1',
            'first'=>'Pepe',
            'last'=>'Smith',
            'dob'=>'1991-06-17',
            'age'=>'12',
            'gender'=>'male',
            'household_id' => 1,
            'address_id' => 1
            
        ));
        
        Person::create(array(
            'id' => '2',
            'first'=>'Bill',
            'last'=>'Gates',
            'dob'=>'1997-06-17',
            'age'=>'17',
            'gender'=>'male',
            'household_id' => 1,
            'address_id' => 1
            
        ));
       
    }
}
