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
        Schema::create('lecturer_inpassing_document', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('li_id');
            $table->unsignedBigInteger('document_type_id')->nullable();
            $table->string('file_path');
            $table->string('file_name');
            $table->text('description');
            $table->timestamps();

            $table->foreign('li_id')
                ->references('id')
                ->on('lecturer_inpassing')
                ->onDelete('cascade');

            $table->foreign('document_type_id')
                ->references('id')
                ->on('document_types')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lecturer_inpassing_document');
    }
};
