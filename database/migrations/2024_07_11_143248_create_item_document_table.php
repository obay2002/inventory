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
        Schema::create('item_document', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->integer('Amount');
            $table->string('category');
            $table->integer('symbolic_number');
            $table->float('standard_unit');
            $table->boolean('is_moved');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_document');
    }
};
