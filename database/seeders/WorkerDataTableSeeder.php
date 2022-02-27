<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkerDataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('worker_data')->insert([
			'worker_id' => 1,
			'first_name' => 'Bat',
			'middle_name' => 'Albert',
			'last_name' => 'Man',
			'gender_id' => 1,
			'date_of_birth' => '1980-07-25',
			'place_of_birth' => 'Gotham',
			'address' => 'Streets of Gotham',
			'zip' => '77777',
			'city' => 'Gotham',
			'province' => 'Republika Srpska',
			'country' => 'Bosna i Hercegovina',
			'phone' => '065',
			'email' => 'batman@email',
			'identification_document_number' => '07GBC',
			'identification_document_issuer' => 'Gotham PD',
			'national_identification_number' => '2507980',
			'bank_account_number' => '555',
			'municipality' => '005',
			'unemployment_proof' => 'Im Batman',
			'education' => 'League of Assassins',
			'skills' => 'punching kicking',
			'note' => 'napomena',
			'valid_from' => "2020-01-11",
			'agency_id' => 1,
			'worker_category_id' => 1,
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
			'created_by' => 1,
			'updated_by' => 1
		]);
		DB::table('worker_data')->insert([
			'worker_id' => 2,
			'first_name' => 'Clark',
			'middle_name' => 'Martha',
			'last_name' => 'Kent',
			'gender_id' => 1,
			'date_of_birth' => '1980-07-25',
			'place_of_birth' => 'Gotham',
			'address' => 'Wayne Manor',
			'zip' => '77777',
			'city' => 'Gotham',
			'province' => 'Republika Srpska',
			'country' => 'Bosna i Hercegovina',
			'phone' => '065',
			'email' => 'batman@email',
			'identification_document_number' => 'f07GBC',
			'identification_document_issuer' => 'Gotham PD',
			'national_identification_number' => 'f2507980',
			'bank_account_number' => '555',
			'unemployment_proof' => 'Im Batman',
			'education' => 'League of Assasins',
			'skills' => 'punching kicking',
			'note' => 'napomena',
			'valid_from' => Carbon::now(),
			'agency_id' => 1,
			'worker_category_id' => 2,
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
			'created_by' => 1,
			'updated_by' => 1
		]);
		DB::table('worker_data')->insert([
			'worker_id' => 1,
			'first_name' => 'Bruce',
			'middle_name' => 'Thomas',
			'last_name' => 'Wayne',
			'gender_id' => 1,
			'date_of_birth' => '1980-07-25',
			'place_of_birth' => 'Gotham',
			'address' => 'Wayne Manor',
			'zip' => '77777',
			'city' => 'Gotham',
			'province' => 'Republika Srpska',
			'country' => 'Bosna i Hercegovina',
			'phone' => '065',
			'email' => 'batman@email',
			'identification_document_number' => '07GBC',
			'identification_document_issuer' => 'Gotham PD',
			'national_identification_number' => '2507980',
			'bank_account_number' => '555',
			'municipality' => '005',
			'unemployment_proof' => 'Im Batman',
			'education' => 'League of Assassins',
			'skills' => 'punching kicking',
			'note' => 'napomena',
			'valid_from' => Carbon::now(),
			'agency_id' => 1,
			'worker_category_id' => 1,
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
			'created_by' => 1,
			'updated_by' => 1
		]);
    }
}
