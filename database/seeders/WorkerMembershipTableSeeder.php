<?php

namespace Database\Seeders;

use Carbon\Carbon;
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
			'asuid' => 'ЗД-12/20',
			'valid_from' => "2020-01-11",
			'agency_id' => 1,
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
			'created_by' => 1,
			'updated_by' => 1
		]);
		DB::table('worker_memberships')->insert([
			'worker_id' => 2,
			'asuid' => 'ЗД-2/22',
			'valid_from' => Carbon::now(),
			'agency_id' => 1,
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
			'created_by' => 1,
			'updated_by' => 1
		]);
		DB::table('worker_memberships')->insert([
			'worker_id' => 1,
			'asuid' => 'ЗД-1/22',
			'valid_from' => Carbon::now(),
			'agency_id' => 1,
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
			'created_by' => 1,
			'updated_by' => 1
		]);
    }
}
