<?php
class PreSeedClearTableSeeder extends Seeder {

    public function run()
    {
        // !!! All existing users are deleted !!!
        DB::table('abusedChildren')->delete();
        DB::table('abusedchild_session')->delete();
        DB::table('abuses')->delete();
        DB::table('abuseType')->delete();
        DB::table('addresses')->delete();
        DB::table('allegedOffenders')->delete();
        DB::table('caseNotes')->delete();
        DB::table('cases')->delete();
        DB::table('case_worker')->delete();
        DB::table('counties')->delete();
        DB::table('DHRCases')->delete();
        DB::table('ethnicities')->delete();
        DB::table('housholds')->delete();
        DB::table('persons')->delete();
        DB::table('relationships')->delete();
        DB::table('relationTypes')->delete();
        DB::table('schools')->delete();
        DB::table('serviceTypes')->delete();
        DB::table('sessionNotes')->delete();
        DB::table('sessions')->delete();
        DB::table('session_worker')->delete();
        DB::table('users')->delete();
        DB::table('workers')->delete();
        DB::table('workerTypes')->delete();
       
    }
}
