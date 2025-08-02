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
        Schema::create('organizations', function (Blueprint $table) {
            $table->id();
            $table->string('org_name');
            $table->string('legal_name');
            $table->string('registration_number')->unique();
            $table->string('tax_number')->nullable();
            $table->text('address')->nullable();
            $table->string('contact_person');
            $table->string('person_position')->nullable();
            $table->string('contact_number');
            $table->string('email_id')->unique();
            $table->boolean('active_flag')->default(true);
            $table->string('org_city');
            $table->string('org_country');
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
        Schema::dropIfExists('organizations');
    }
};
