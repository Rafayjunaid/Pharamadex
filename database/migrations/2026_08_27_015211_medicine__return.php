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
    Schema::create('medicine_return', function (Blueprint $table) {
        $table->id();
        $table->string('Medicine_Name');
        $table->integer('Batch_Number');
        $table->integer('Quantity');
        $table->string('Customer');
        $table->text('Condition_Of_Medicine');
        $table->text('Reason_for_Return');
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
       Schema::dropIfExists('medicine_return');
    }
};
