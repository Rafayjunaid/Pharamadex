<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('medicines', function (Blueprint $table) {
            $table->id();
            $table->string('Medicine_Name');
            $table->integer('Batch_Number')->nullable();
            $table->integer('Quantity')->default(0);
            $table->date('Expiry_Date')->nullable();
            $table->string('Type');
            $table->timestamps();
            $table->unique(['Medicine_Name', 'Batch_Number']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('medicines');
    }
};