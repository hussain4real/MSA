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
        Schema::create('banks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('org_id')->constrained('organizations');
            $table->string('bank_id')->unique();
            $table->string('bank_name');
            $table->text('address')->nullable();
            $table->string('account_number');
            $table->string('iban_number')->nullable();
            $table->string('swift_code')->nullable();
            $table->string('type')->nullable();
            $table->string('currency');
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
        Schema::dropIfExists('banks');
    }
};
