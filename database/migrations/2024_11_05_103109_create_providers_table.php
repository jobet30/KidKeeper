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
        Schema::create('providers', function (Blueprint $table) {
            $table->id();
            $table->string('provider_name');
            $table->enum('type_of_service', [
                'Medical', 
                'Mental Health', 
                'Educational', 
                'Social Services', 
                'Other'
            ]);
            $table->string('contact_information')->nullable();
            $table->string('availability')->nullable();
            $table->text('service_description')->nullable();
            $table->text('notes')->nullable();
            $table->enum('provider_rating', [
                '1 Star', 
                '2 Stars', 
                '3 Stars', 
                '4 Stars', 
                '5 Stars'
            ])->nullable();
            $table->string('service_area')->nullable();
            $table->timestamp('last_updated')->useCurrent()->useCurrentOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('providers');
    }
};
