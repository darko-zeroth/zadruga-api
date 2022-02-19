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
        Schema::create('job_ledgers', function (Blueprint $table) {
            $table->id();
			$table->foreignId('job_id')->constrained();
			$table->decimal('amount', 19, 4);
			$table->date('date');
			$table->string('source');
			$table->bigInteger('agency_id')->unsigned();
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
        Schema::dropIfExists('job_ledgers');
    }
};
