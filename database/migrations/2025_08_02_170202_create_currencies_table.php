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
        Schema::create('currencies', function (Blueprint $table) {
            $table->id();
            $table->string('currency_code');
            $table->string('currency_name');
            $table->string('currency_country');
            $table->decimal('ex_rate', 10, 4);
            $table->boolean('active_flag')->default(true);
            $table->timestamp('creation_date')->useCurrent();
            $table->foreignId('created_by')->constrained('users');
            $table->timestamp('last_modified_date')->useCurrent()->useCurrentOnUpdate();
            $table->foreignId('last_modified_by')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('currencies');
    }
};
