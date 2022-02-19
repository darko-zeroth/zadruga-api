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
        Schema::create('worker_memberships', function (Blueprint $table) {
            $table->id();
			$table->foreignId('worker_id')->constrained();
			$table->string('asuid');
			$table->date('signing_date');
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
        Schema::dropIfExists('worker_memberships');
    }
};
