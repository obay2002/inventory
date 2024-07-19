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
        // وثيقة الاستلام
        Schema::create('_receipt_document', function (Blueprint $table) {
            $table->id();
            // رقم قائمة الشراء
            $table->integer('List_number');
            // تاريخها
            $table->dateTime('Its_history');
            // المجهز
            $table->string('Equipped');
            // رقم مستند طلب الشراء
            $table->integer('Document_number');
            // الكلية او المؤسسة
            $table->string('Enterprise');
            // المخزن
            $table->string('store');
            // التفاصيل
            $table->string('Description');
            // الرقم الرمزي
            $table->integer('Symbolic_number');
            // الوحدة القياسية
            $table->string('Standard_unit');
            // الكميات رقما
            $table->integer('Quantities_numbers');
            // الكميات كتابة
            $table->float('Quantities_writing');
            // التكلفة | سعر الوحدة
            $table->float('unit_price');
            // التكلفة | المبلغ
            $table->float('Amount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_receipt_document');
    }
};
