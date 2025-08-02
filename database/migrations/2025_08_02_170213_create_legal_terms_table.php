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
        Schema::create('legal_terms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('org_id')->constrained('organizations');
            $table->string('terms_code');
            $table->string('terms_serial');
            $table->string('terms_title');
            $table->string('terms_category');
            $table->text('terms_description')->nullable();
            $table->string('terms_version');
            $table->date('valid_from');
            $table->date('valid_to')->nullable();
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
        Schema::dropIfExists('legal_terms');
    }
};
