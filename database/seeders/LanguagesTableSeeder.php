<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguagesTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('languages')->insert([
			'description' => 'Latinica',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now()
		]);
		DB::table('languages')->insert([
			'description' => 'Ћирилица',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now()
		]);
	}
}
