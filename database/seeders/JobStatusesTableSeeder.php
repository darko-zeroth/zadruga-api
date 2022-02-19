<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobStatusesTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('job_statuses')->insert([
			'description' => 'Inicijalno',
			'profile_id' => 1,
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now()
		]);
		DB::table('job_statuses')->insert([
			'description' => 'Otvoreno',
			'profile_id' => 1,
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now()
		]);
		DB::table('job_statuses')->insert([
			'description' => 'Zaključeno',
			'profile_id' => 1,
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now()
		]);
	}
}
