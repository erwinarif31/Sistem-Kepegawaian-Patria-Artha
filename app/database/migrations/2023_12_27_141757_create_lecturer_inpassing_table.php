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
        Schema::create('lecturer_inpassing', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('lcr_id');
            $table->string('inpassing_employment_number');
            $table->date('employment_number_date')->nullable();
            $table->date('inpassing_start_at');
            $table->string('credit_number');
            $table->string('year_of_service');
            $table->string('month_of_service');
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('lcr_id')
                ->references('id')
                ->on('class_rank')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lecturer_inpassing');
    }
};
