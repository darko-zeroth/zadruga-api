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
        Schema::create('agencies', function (Blueprint $table) {
            $table->id();
			$table->string('name');
			$table->string('address');
			$table->string('zip');
			$table->string('city');
			$table->string('province')->nullable();
			$table->string('phone');
			$table->string('fax')->nullable();
			$table->string('email');
			$table->string('national_identification_number')->unique();
			$table->string('tax_number')->nullable()->unique();
			$table->string('company_registration_number')->nullable()->unique();
			$table->string('bank_account_number')->unique();
			$table->string('ceo');
			$table->string('default_zip')->nullable();
			$table->string('default_city')->nullable();
			$table->string('default_province')->nullable();
			$table->string('default_country')->nullable();
			$table->string('default_municipality')->nullable();
			$table->string('default_average_brutto_salary')->nullable();
			$table->string('worker_prefix')->nullable();
			$table->string('order_prefix')->nullable();
			$table->string('invoice_prefix')->nullable();
			$table->foreignId('profile_id')->constrained();
			$table->foreignId('language_id')->constrained();
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
        Schema::dropIfExists('agencies');
    }
};
