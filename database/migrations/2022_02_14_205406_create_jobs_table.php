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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
			$table->string('asuid');
			$table->foreignId('client_id')->constrained();
			$table->string('description')->nullable();
			$table->integer('requested_number_of_workers')->unsigned()->nullable();
			$table->integer('average_brutto_salary')->unsigned()->nullable();
			$table->integer('monthly_working_hours')->unsigned()->nullable();
			$table->date('start_date')->nullable();
			$table->date('end_date')->nullable();
			$table->text('note')->nullable();
			$table->foreignId('job_status_id')->constrained();
			$table->foreignId('agency_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
};
