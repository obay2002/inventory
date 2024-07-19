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
        // جدول مستند الصرف
        Schema::create('_exchange_document', function (Blueprint $table) {
            $table->id();
            $table->string('Enterprise');
            $table->string('Destination');
            $table->dateTime('history');
            $table->integer('document_number');
            $table->integer('store');
            $table->integer('notes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_exchange_document');
    }
};
