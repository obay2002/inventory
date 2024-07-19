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
        // جدول للموظفين
        Schema::create('_employee', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('Career_Title');
            $table->string('department');
            $table->string('Enterprise');
            $table->integer('Branch_number');
            $table->integer('department_number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_employee');
    }
};
