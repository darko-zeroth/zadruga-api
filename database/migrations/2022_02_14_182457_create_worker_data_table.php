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
        Schema::create('worker_data', function (Blueprint $table) {
            $table->id();
			$table->foreignId('worker_id')->constrained();
			$table->string('first_name');
			$table->string('middle_name')->nullable();
			$table->string('last_name');
			$table->foreignId('gender_id')->constrained();
			$table->date('date_of_birth')->nullable();
			$table->string('place_of_birth')->nullable();
			$table->string('address')->nullable();
			$table->string('zip')->nullable();
			$table->string('city')->nullable();
			$table->string('province')->nullable();
			$table->string('country')->nullable();
			$table->string('phone')->nullable();
			$table->string('email')->nullable();
			$table->string('identification_document_number')->nullable();
			$table->string('identification_document_issuer')->nullable();
			$table->string('national_identification_number');
			$table->string('bank_account_number')->nullable();
			$table->string('municipality')->nullable();
			$table->string('unemployment_proof')->nullable();
			$table->string('education')->nullable();
			$table->text('skills')->nullable();
			$table->text('note')->nullable();
			$table->foreignId('worker_category_id')->constrained();
			$table->timestamp('valid_from');
			$table->foreignId('agency_id')->constrained();
			$table->unsignedBigInteger('created_by');
			$table->unsignedBigInteger('updated_by');
            $table->timestamps();

			$table->unique(['worker_id', 'valid_from']);

			$table->foreign('created_by')->references('id')->on('users');
			$table->foreign('updated_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('worker_data');
    }
};
