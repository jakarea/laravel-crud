<?php

use Illuminate\Database\Seeder;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
    	require_once('vendor/fzaninotto/faker/src/autoload.php');
    	$faker = Faker\Factory::create();
    	for ($i=0; $i < 1; $i++) {
    		$salary 	= $faker->numberBetween($min = 8000, $max = 209000);
    		$education 	= ['Minimum Bsc in cse','Not important', 'Maters from any reputed university'];
    		$k = array_rand($education);
			$education = $education[$k];
	        DB::table('jobs')->insert([
	            'companyname'		=> $faker->company
		    	,'jobtitle'			=> $faker->jobTitle
		    	,'jobdescription'	=> $faker->realText($maxNbChars = 200)
		    	,'jobnature'		=> $faker->word 
		    	,'edurequirment'	=> $education 
		    	,'exprequirment'	=> $faker->word 
		    	,'jobrequirment'	=> $faker->word 
		    	,'joblocation'		=> $faker->city 
		    	,'salaryrange'		=> $salary 
		    	,'otherbenefits'	=> $faker->realText($maxNbChars = 100)
		    	,'jobsource'		=> $faker->freeEmailDomain
		    	,'deadline'			=> date('Y-m-d', strtotime( '+'.mt_rand(0,30).' days'))
		    	,'created_at' 		=> \Carbon\Carbon::now()->toDateTimeString()
                ,'updated_at' 		=> \Carbon\Carbon::now()->toDateTimeString()
	        ]);
	    }
    }
}

		