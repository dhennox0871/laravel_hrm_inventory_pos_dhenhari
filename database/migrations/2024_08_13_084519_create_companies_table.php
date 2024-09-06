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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            //logo
            $table->string('logo')->nullable();
            $table->string('website')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            //status
            $table->string('status');
            //total_user
            $table->integer('total_users')->default(1);
            //clock in time
            $table->string('clock_in_time')->default('09:00:00');
            //clock out time
            $table->string('clock_out_time')->default('18:00:00');
            //early clock in time
            $table->string('early_clock_in_time')->nullable();
            //allow clock out time
            $table->string('allow_clock_out_time')->nullable();
            //self clocking
            $table->integer('self_clocking')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
