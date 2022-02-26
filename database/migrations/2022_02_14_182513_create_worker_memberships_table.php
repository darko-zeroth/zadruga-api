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
			$table->timestamp('valid_from');
			$table->foreignId('agency_id')->constrained();
            $table->timestamps();

			$table->unique(['worker_id', 'valid_from']);
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
