<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientTypesTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('client_types')->insert([
			'description' => 'Pravno lice',
			'profile_id' => 1,
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now()
		]);
		DB::table('client_types')->insert([
			'description' => 'Fizičko lice',
			'profile_id' => 1,
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now()
		]);
	}
}
