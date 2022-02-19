<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkerMembershipTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('worker_memberships')->insert([
			'worker_id' => 1,
			'asuid' => 'ЗД-1/22',
			'signing_date' => Carbon::now(),
			'agency_id' => 1,
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now()
		]);
		DB::table('worker_memberships')->insert([
			'worker_id' => 2,
			'asuid' => 'ЗД-2/22',
			'signing_date' => Carbon::now(),
			'agency_id' => 1,
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now()
		]);
    }
}
