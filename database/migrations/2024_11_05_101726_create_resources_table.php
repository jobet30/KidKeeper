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
        Schema::create('resources', function (Blueprint $table) {
            $table->id();
            $table->string('resource_name');
            $table->enum('type_of_resource', [
                'Shelter', 
                'Counseling', 
                'Educational Program', 
                'Medical Services', 
                'Other'
            ]);
            $table->string('location')->nullable();
            $table->string('contact_information')->nullable();
            $table->text('eligibility_requirements')->nullable();
            $table->text('notes')->nullable();
            $table->integer('capacity')->nullable();
            $table->string('operating_hours')->nullable();
            $table->decimal('cost_of_service', 10, 2)->nullable();
            $table->timestamp('last_updated')->useCurrent()->useCurrentOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resources');
    }
};
