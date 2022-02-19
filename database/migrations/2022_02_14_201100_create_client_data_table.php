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
        Schema::create('client_data', function (Blueprint $table) {
            $table->id();
			$table->foreignId('client_id')->constrained();
			$table->string('name');
			$table->foreignId('client_type_id')->constrained();
			$table->string('address')->nullable();
			$table->string('zip')->nullable();
			$table->string('city')->nullable();
			$table->string('province')->nullable();
			$table->string('country')->nullable();
			$table->string('phone')->nullable();
			$table->string('email')->nullable();
			$table->string('fax')->nullable();
			$table->string('national_identification_number')->unique();
			$table->string('bank_account_number')->unique()->nullable();
			$table->string('business_activity')->nullable();
			$table->text('note')->nullable();
			$table->date('valid_from');
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
        Schema::dropIfExists('client_data');
    }
};
