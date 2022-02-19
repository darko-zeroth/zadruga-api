<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('users')->insert([
			'first_name' => 'Јадранка',
			'last_name' => 'Петровић',
			'email' => 'lavche@gmail.com',
			'phone' => '+38765597540',
			'password' => bcrypt('darko'),
			'status' => true,
			'login_fails' => 0,
			'agency_id' => 1,
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now()
		]);
	}
}
