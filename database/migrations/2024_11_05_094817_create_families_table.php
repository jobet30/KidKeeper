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
        Schema::create('families', function (Blueprint $table) {
            $table->id();
            $table->string('family_name');
            $table->text('address');
            $table->string('contact_phone')->nullable();
            $table->string('contact_email')->nullable();
            $table->enum('relationship_to_child', ['Parent', 'Guardian', 'Relative', 'Foster Parent']);
            $table->enum('family_status', ['Single Parent', 'Guardian', 'Married', 'Divorced', 'Widowed']);
            $table->text('notes')->nullable();
            $table->unsignedInteger('number_of_children')->default(0);
            $table->enum('family_income', ['Low', 'Middle', 'High']);
            $table->enum('family_composition', ['Nuclear', 'Extended', 'Blended']);
            $table->text('emergency_contact_information')->nullable();
            $table->timestamp('last_updated')->useCurrent();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('families');
    }
};
