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
        Schema::create('incident_reports', function (Blueprint $table) {
            $table->id();
            $table->date('incident_date');
            $table->text('description');
            $table->enum('type_of_incident', ['Abuse', 'Neglect', 'Other']);
            $table->foreignId('reporter_id')->constrained('users')->onDelete('set null');
            $table->text('action_taken')->nullable();
            $table->enum('status', ['Reported', 'Under Investigation', 'Resolved']);
            $table->string('location')->nullable();
            $table->enum('severity_level', ['Minor', 'Moderate', 'Severe']);
            $table->text('witness_information')->nullable();
            $table->timestamp('date_reported')->useCurrent();
            $table->timestamp('last_updated')->useCurrent()->useCurrentOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incident_reports');
    }
};
