<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GendersTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('genders')->insert([
			'description' => 'Muški',
			'country_id' => 1,
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now()
		]);
		DB::table('genders')->insert([
			'description' => 'Ženski',
			'country_id' => 1,
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now()
		]);
	}
}
