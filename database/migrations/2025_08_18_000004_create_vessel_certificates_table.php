<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('vessel_certificates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('organization_id')->constrained()->cascadeOnDelete();
            $table->foreignId('vessel_id')->constrained('customer_vessels')->cascadeOnDelete();
            $table->string('certificate_type');
            $table->string('certificate_ref')->nullable();
            $table->string('certificate_name');
            $table->string('issued_by')->nullable();
            $table->date('issue_date')->nullable();
            $table->date('expiry_date')->nullable();
            $table->date('next_renewal')->nullable();
            $table->string('status')->default('valid');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('vessel_certificates');
    }
};
