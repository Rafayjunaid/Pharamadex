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
    Schema::create('damaged_medicine', function (Blueprint $table) {
        $table->id();
        $table->string('Medicine_Name');
        $table->integer('Batch_Number');
        $table->integer('Quantity_Damaged');
        $table->string('Reason_for_Damage');
        $table->string('status')->default('pending');
        $table->string('Type');
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         Schema::dropIfExists('damaged_medicine');
    }
};
