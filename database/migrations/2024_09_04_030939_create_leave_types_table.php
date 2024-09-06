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
        Schema::create('leave_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            //company_id
            $table->foreignId('company_id')->constrained('companies')->onDelete('cascade');
            //created_by
            $table->foreignId('created_by')->constrained('users')->onDelete('cascade');
            //is paid
            $table->boolean('is_paid')->default(1);
            //total leave
            $table->integer('total_leave')->default(0);
            //maximum leave
            $table->integer('maximum_leave')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leave_types');
    }
};
