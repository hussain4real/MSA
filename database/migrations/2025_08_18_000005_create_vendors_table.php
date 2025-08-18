<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('organization_id')->constrained()->cascadeOnDelete();
            $table->string('vendor_code')->unique();
            $table->string('legal_name');
            $table->string('trade_name')->nullable();
            $table->string('vendor_type');
            $table->string('registration_no')->nullable();
            $table->string('tax_number')->nullable();
            $table->text('address')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('primary_contact')->nullable();
            $table->string('primary_email')->nullable();
            $table->string('contact_no')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('bank_account')->nullable();
            $table->string('swift_code')->nullable();
            $table->string('payment_terms')->nullable();
            $table->string('payment_currency')->nullable();
            $table->string('status')->default('active');
            $table->string('approval_status')->default('pending');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('vendors');
    }
};
