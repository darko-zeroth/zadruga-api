<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkerCategoriesTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('worker_categories')->insert([
			'description' => 'Studenti',
			'profile_id' => 1,
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now()
		]);
		DB::table('worker_categories')->insert([
			'description' => 'Nezaposleni',
			'profile_id' => 1,
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now()
		]);
	}
}
