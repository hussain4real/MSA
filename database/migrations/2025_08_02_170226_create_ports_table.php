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
        Schema::create('ports', function (Blueprint $table) {
            $table->id();
            $table->string('port_code');
            $table->string('port_name');
            $table->string('port_country');
            $table->string('port_type');
            $table->decimal('longitude', 10, 7)->nullable();
            $table->decimal('latitude', 10, 7)->nullable();
            $table->string('time_zone')->nullable();
            $table->string('vessel_size')->nullable();
            $table->decimal('max_draft', 8, 2)->nullable();
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
        Schema::dropIfExists('ports');
    }
};
