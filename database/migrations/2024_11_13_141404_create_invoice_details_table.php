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
        Schema::create('invoice_details', function (Blueprint $table) {
            $table->id('lineNo');
            $table->string('productName')->max(100);
            $table->foreignId('UnitNo')->constrained('units', 'unitNo');

            $table->decimal('price', 10, 2);
            $table->decimal('quantity', 10, 2);
            $table->decimal('total', 10, 2);
            $table->date('expiryDate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_details');
    }
};
