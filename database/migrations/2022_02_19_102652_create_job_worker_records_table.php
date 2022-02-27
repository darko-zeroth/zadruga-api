<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_worker_records', function (Blueprint $table) {
			$table->id();
			$table->foreignId('job_id')->constrained();
			$table->foreignId('worker_id')->constrained();
			$table->decimal('hours_worked', 19, 4)->unsigned()->nullable();
			$table->decimal('hourly_rate', 19, 4)->unsigned()->nullable();
			$table->foreignId('agency_id')->constrained();
			$table->string('created_by');
			$table->string('updated_by');
			$table->timestamps();

			$table->unique(['agency_id', 'job_id', 'worker_id'], 'worker_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_worker_records');
    }
};
