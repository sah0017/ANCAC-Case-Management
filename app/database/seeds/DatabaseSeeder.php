<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('PreSeedClearTableSeeder');
                $this->call('UserTableSeeder');
                $this->call('AbuseTypeTableSeeder');
                $this->call('WorkerTypeTableSeeder');
                $this->call('WorkerTableSeeder');
                $this->call('CountyTableSeeder');
                $this->call('CaseTableSeeder');
                $this->call('ChildTableSeeder');
                $this->call('PersonTableSeeder');
                $this->call('HouseholdTableSeeder');
                $this->call('RelativeTypeTableSeeder');
                $this->call('AddressTableSeeder');
                $this->call('WorkingSchoolTableSeeder');

	}

}
