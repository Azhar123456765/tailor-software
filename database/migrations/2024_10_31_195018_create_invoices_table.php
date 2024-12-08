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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('unique_id')->nullable(); // Unique identifier
            $table->date('date')->nullable(); // Invoice date
            $table->foreignId('customer_id')->nullable()->constrained('customers')->onDelete('set null'); // Customer foreign key
            $table->string('remarks')->nullable(); // Remarks
            $table->json('item')->nullable(); // JSON to store items
            $table->json('sale_qty')->nullable(); // JSON to store quantities
            $table->json('sale_price')->nullable(); // JSON to store prices
            $table->json('amount')->nullable(); // JSON to store amounts
            $table->decimal('total', 10, 2)->nullable(); // Total amount
            $table->decimal('discount', 10, 2)->nullable(); // Discount
            $table->decimal('net_amount', 10, 2)->nullable(); // Net amount
            $table->decimal('amount_paid', 10, 2)->nullable(); // Amount paid
            $table->bigInteger('remaining_amount')->nullable(); // Remaining amount
            $table->timestamps(); // created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
