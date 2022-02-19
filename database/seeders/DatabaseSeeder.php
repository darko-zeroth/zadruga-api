<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run()
	{
		$this->call([
			LanguagesTableSeeder::class,
			CountriesTableSeeder::class,
			ProfilesTableSeeder::class,
			GendersTableSeeder::class,
			WorkerCategoriesTableSeeder::class,
			ClientTypesTableSeeder::class,
			JobStatusesTableSeeder::class,
			AgenciesTableSeeder::class,
			UsersTableSeeder::class,
			WorkersTableSeeder::class,
			WorkerDataTableSeeder::class,
			WorkerMembershipTableSeeder::class,
			ClientsTableSeeder::class,
			ClientDataTableSeeder::class
		]);
	}
}
