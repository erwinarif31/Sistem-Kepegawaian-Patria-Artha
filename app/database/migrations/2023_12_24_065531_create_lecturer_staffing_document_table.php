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
        Schema::create('lecturer_staffing_document', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lecturer_staffing_id');
            $table->string('document_file');
            $table->text('description')->nullable();
            $table->unsignedBigInteger('document_type_id');
            $table->string('file_path')->nullable();
            $table->timestamps();

            $table->foreign('lecturer_staffing_id')
                ->references('id')
                ->on('lecturer_staffing')
                ->onDelete('cascade');

            $table->foreign('document_type_id')
                ->references('id')
                ->on('document_types')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lecturer_staffing_document');
    }
};
