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
    Schema::create('quantity_received', function (Blueprint $table) {
        $table->id();
        $table->string('Medicine_Name');
        $table->integer('Batch_Number')->nullable();
        $table->string('Supplier')->nullable();
        $table->integer('Quantity_Received');
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
       Schema::dropIfExists('quantity_received');
    }
};
