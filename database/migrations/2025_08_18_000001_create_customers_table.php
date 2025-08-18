<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('organization_id')->constrained()->cascadeOnDelete();
            $table->string('customer_code')->unique();
            $table->string('legal_name');
            $table->string('trade_name')->nullable();
            $table->string('customer_type');
            $table->string('business_category')->nullable();
            $table->string('cr_number')->nullable();
            $table->string('tax_number')->nullable();
            $table->text('address')->nullable();
            $table->string('po_box')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->decimal('credit_limit', 12, 2)->nullable();
            $table->string('credit_currency')->nullable();
            $table->string('payment_terms')->nullable();
            $table->string('credit_status')->nullable();
            $table->string('erp_code')->nullable();
            $table->string('status')->nullable();
            $table->string('approval_status')->default('pending');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
