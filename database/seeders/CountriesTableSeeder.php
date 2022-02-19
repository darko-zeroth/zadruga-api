<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('countries')->insert([
			'name' => 'Bosna i Hercegovina',
			'currency' => 'BAM',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now()
		]);
	}
}
