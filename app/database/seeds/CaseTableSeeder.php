<?php
class CaseTableSeeder extends Seeder {

    public function run()
    {
        // !!! All existing users are deleted !!!
        DB::table('cases')->delete();

        TrackedCase::create(array(
            'id' => '1',
            'abusedChild_id'=>'1',
            'caseNumber'=>'221',
            'center_id'=>'1',
            'worker_id'=>'4',
            'note'=>'note of case',
            'caseOpened'=>'2006-08-14',
            'caseClosed'=>'2008-08-15',
            'county_id'=>'1',
            'custodyIssues'=>true,
            'IOReport'=>false,
            'domesticViolence'=>true,
            'prosecution'=>false,
            'reporter'=>'John Carter',
            'abuseDate'=>'2006-07-14',
            'abuseLocation'=>'Down Town',
            'referralReason'=>'Sexual Abuse',
            'DHRDetermination'=>'indicated',
            'forensicEvaluation'=>true,
            'status'=>'open',
            'chargesFiled'=>'charges filed',
            'agencyReportedTo'=>'Faukner',
            'talkedToChild'=>'Bob Smith',
            'reportedDate'=>'2006-09-13'
            
        ));
        
        TrackedCase::create(array(
            'id' => '2',
            'abusedChild_id'=>'2',
            'caseNumber'=>'225',
            'center_id'=>'1',
            'worker_id'=>'4',
            'note'=>'note of case 2',
            'caseOpened'=>'2006-05-25',
            'caseClosed'=>'2008-12-31',
            'county_id'=>'1',
            'custodyIssues'=>false,
            'IOReport'=>false,
            'domesticViolence'=>true,
            'prosecution'=>true,
            'reporter'=>'William Petterson',
            'abuseDate'=>'2006-07-14',
            'abuseLocation'=>'Down Town',
            'referralReason'=>'Sexual Abuse',
            'DHRDetermination'=>'indicated',
            'forensicEvaluation'=>true,
            'status'=>'open',
            'chargesFiled'=>'charges filed',
            'agencyReportedTo'=>'Faukner',
            'talkedToChild'=>'James Smith',
            'reportedDate'=>'2006-09-13'
            
        ));
       
    }
}