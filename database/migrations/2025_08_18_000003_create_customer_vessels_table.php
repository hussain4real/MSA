<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('customer_vessels', function (Blueprint $table) {
            $table->id();
            $table->foreignId('organization_id')->constrained()->cascadeOnDelete();
            $table->foreignId('customer_id')->constrained('customers')->cascadeOnDelete();
            $table->string('vessel_code')->unique();
            $table->string('vessel_short_code')->nullable();
            $table->string('vessel_name');
            $table->string('imo_number')->nullable();
            $table->string('vessel_type')->nullable();
            $table->string('flag_state')->nullable();
            $table->decimal('gross_tonnage', 10, 2)->nullable();
            $table->decimal('nett_tonnage', 10, 2)->nullable();
            $table->decimal('dead_wt', 10, 2)->nullable();
            $table->decimal('overall_length', 8, 2)->nullable();
            $table->decimal('beam', 8, 2)->nullable();
            $table->decimal('draft', 8, 2)->nullable();
            $table->unsignedSmallInteger('year_built')->nullable();
            $table->string('classification_society')->nullable();
            $table->string('class_notation')->nullable();
            $table->string('vessel_operator')->nullable();
            $table->string('vessel_owner')->nullable();
            $table->string('vessel_manager')->nullable();
            $table->string('service_type')->nullable();
            $table->string('frequency')->nullable();
            $table->string('status')->default('active');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('customer_vessels');
    }
};
