<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientDataTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('client_data')->insert([
			'client_id' => 1,
			'name' => 'Мтел а.д. Бања Лука',
			'client_type_id' => 1,
			'address' => 'Вука Караџића 2',
			'zip' => '78000',
			'city' => 'Бања Лука',
			'province' => 'Republika Srpska',
			'country' => 'Bosna i Hercegovina',
			'phone' => '+38766...',
			'email' => 'email@adresa',
			'fax' => '',
			'national_identification_number' => '4400964000002',
			'bank_account_number' => '555-007-02200000-40',
			'business_activity' => 'Telekomunikacije',
			'note' => '',
			'valid_from' => Carbon::now(),
			'agency_id' => 1,
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now()
		]);
	}
}
