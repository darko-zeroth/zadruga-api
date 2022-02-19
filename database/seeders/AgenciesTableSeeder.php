<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgenciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('agencies')->insert([
			'name' => 'Омладинска задруга Млади радник',
			'address' => 'Мајора Драгутина Гавриловића 2А ',
			'zip' => '76300',
			'city' => 'Бијељина',
			'province' => 'Република Српска',
			'phone' => '055/210-273, 055/202-837, 055/210-631',
			'fax' => '055/210-273, 055/202-837, 055/210-631',
			'email' => 'mradnik@rstel.net',
			'national_identification_number' => '4400322230004',
			'tax_number' => '0400322230004',
			'company_registration_number' => '01219014',
			'bank_account_number' => 'Наша банка АД 554-001-00000002-75,Сбербанк АД 567-343-27000033-48',
			'ceo' => 'Слободан Тривковић',
			'default_zip' => '76300',
			'default_city' => 'Бијељина',
			'default_province' => 'Република Српска',
			'default_country' => 'Босна и Херцеговина',
			'default_municipality' => '005',
			'default_average_brutto_salary' => 1407,
			'worker_prefix' => 'ЗД',
			'order_prefix' => 'УП',
			'invoice_prefix' => 'ФТ',
			'profile_id' => 1,
			'language_id' => 2,
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now()
		]);
    }
}
