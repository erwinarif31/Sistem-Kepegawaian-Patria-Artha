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
        Schema::create('lecturer_other_document', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lecturer_other_id');
            $table->string('document_file');
            $table->text('description')->nullable();
            $table->unsignedBigInteger('document_type_id');
            $table->string('file_path')->nullable();
            $table->timestamps();

            $table->foreign('lecturer_other_id')
                ->references('id')
                ->on('lecturer_others')
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
        Schema::dropIfExists('lecturer_other_document');
    }
};
