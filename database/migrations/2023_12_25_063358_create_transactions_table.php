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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->foreignId('company_id')->constrained();
            $table->foreignId('recipient_id');
            $table->foreignId('user_id')->constrained();
            $table->string('type')->nullable(); // ('purchase', 'sale', 'return', 'refund', 'delivery')
            $table->decimal('total', 8, 2)->nullable();
            $table->decimal('tax', 8, 2)->nullable();
            $table->decimal('discount', 8, 2)->nullable();
            $table->decimal('shipping', 8, 2)->nullable();
            $table->decimal('handling', 8, 2)->nullable();
            $table->decimal('grand_total', 8, 2);
            $table->decimal('total_items', 8, 2)->nullable();
            $table->string('status')->nullable(); // ('pending', 'processing', 'shipped', 'delivered', 'returned', 'refunded', 'voided')
            $table->string('details')->nullable();
            $table->string('notes')->nullable();
            $table->string('payment_method')->nullable(); // ('cash', 'credit_card', 'debit_card', 'paypal', 'stripe', 'apple_pay', 'google_pay', 'amazon_pay', 'other')
            $table->string('payment_reference')->nullable();
            $table->string('payment_status')->nullable(); // ('paid', 'unpaid', 'partial', 'refunded', 'voided')
            $table->string('payment_details')->nullable();
            // $table->string('tracking_number')->nullable();
            // $table->string('tracking_url')->nullable();
            // $table->string('tracking_details')->nullable();
            // $table->string('shipping_method')->nullable();
            // $table->string('shipping_carrier')->nullable();
            // $table->string('shipping_service')->nullable();
            // $table->string('shipping_status')->nullable(); // ('pending', 'processing', 'shipped', 'delivered', 'returned', 'refunded', 'voided')
            // $table->string('shipping_details')->nullable();
            // $table->string('shipping_notes')->nullable();
            // $table->string('shipping_address1')->nullable();
            // $table->string('shipping_address2')->nullable();
            // $table->string('shipping_city')->nullable();
            // $table->string('shipping_postal_code')->nullable();
            // $table->string('shipping_country')->nullable();
            // $table->string('billing_address1')->nullable();
            // $table->string('billing_address2')->nullable();
            // $table->string('billing_city')->nullable();
            // $table->string('billing_postal_code')->nullable();
            // $table->string('billing_country')->nullable();
            $table->timestamp('paid_at')->nullable();
            $table->timestamp('shipped_at')->nullable();
            $table->timestamp('delivered_at')->nullable();
            $table->timestamp('returned_at')->nullable();
            $table->timestamp('refunded_at')->nullable();
            $table->timestamp('voided_at')->nullable();
            $table->timestamp('archived_at')->nullable();
            $table->timestamp('restored_at')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
