<?php
class UserTableSeeder extends Seeder {

    public function run()
    {
        // !!! All existing users are deleted !!!
        DB::table('users')->delete();

        User::create(array(
            'id'        => 'admin',
            'fullname'  => 'Super Administrator',
            'password'  => Hash::make('admin'),
            'email'     => 'admin@localhost',
            'center_id' => 99,
            'level'     => 3,
            'worker_id' => 1
        ));
        User::create(array(
            'id'        => 'superviewer',
            'fullname'  => 'Super Viewer',
            'password'  => Hash::make('view'),
            'email'     => 'sviewer@localhost',
            'center_id' => 99,
            'level'     => 1,
            'worker_id' => 2
        ));
        
        User::create(array(
            'id'        => 'centeradmin',
            'fullname'  => 'Center Administrator',
            'password'  => Hash::make('admin'),
            'email'     => 'cadmin@localhost',
            'center_id' => 1,
            'level'     => 3,
            'worker_id' => 3
        ));
        
        User::create(array(
            'id'        => 'user',
            'fullname'  => 'User',
            'password'  => Hash::make('user'),
            'email'     => 'user@localhost',
            'center_id' => 1,
            'level'     => 2,
            'worker_id' => 4
        ));
        
        User::create(array(
            'id'        => 'view',
            'fullname'  => 'Viewer',
            'password'  => Hash::make('view'),
            'email'     => 'view@localhost',
            'center_id' => 1,
            'level'     => 1,
            'worker_id' => 5
        ));
    }
}
