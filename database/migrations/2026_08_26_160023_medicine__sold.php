<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
       Schema::create('medicine_sold', function (Blueprint $table) {
    $table->id();
    $table->string('Medicine_Name');
    $table->integer('Batch_Number')->nullable();
    $table->string('Customer_Name')->nullable();
    $table->integer('Quantity_Sold');
    $table->string('status')->default('pending');
    $table->string('Type');
    $table->timestamps();
});
    }

    public function down(): void
    {
        Schema::dropIfExists('medicine_sold');
    }
};