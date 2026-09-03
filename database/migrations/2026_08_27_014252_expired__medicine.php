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
    Schema::create('expired_medicines', function (Blueprint $table) {
        $table->id();
        $table->string('Medicine_Name');
        $table->integer('Quantity');
        $table->date('Expiry_Date');
        $table->integer('Batch_Number')->nullable();
        $table->date('Date_Discovered');
        $table->string('status')->default('pending');
        $table->text('Notes');
        $table->string('Type');
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expired_medicines');

    }
};
