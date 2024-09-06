<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('shifts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            //company_id
            $table->foreignId('company_id')->constrained('companies')->onDelete('cascade');
            //clock_in_time
            $table->time('clock_in_time');
            //clock_out_time
            $table->time('clock_out_time');
            //late_mark_after int
            $table->integer('late_mark_after')->nullable();
            //early_clock_in_time
            $table->integer('early_clock_in_time')->nullable();
            //early_clock_out_time
            $table->integer('allow_clock_out_time')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shifts');
    }
};
