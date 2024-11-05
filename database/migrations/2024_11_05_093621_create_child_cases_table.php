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
        Schema::create('child_cases', function (Blueprint $table) {
            $table->id();

            $table->softDeletes();
            $table->date('dob');
            $table->enum('gender', ['Male', 'Female', 'Non-binary', 'Other']);
            $table->text('guardian_info')->nullable();
            $table->string('case_number')->unique();
            $table->enum('status', ['Open', 'Closed', 'In Progress']);
            $table->enum('risk_level', ['Low', 'Medium', 'High', 'Critical']);
            $table->date('date_opened')->nullable();
            $table->date('date_closed')->nullable();
            $table->text('notes')->nullable();
            $table->enum('ethnicity', ['Caucasian', 'African American', 'Hispanic', 'Asian', 'Other']);
            $table->enum('disability_status', ['None', 'Physical', 'Developmental', 'Emotional']);
            $table->string('school_info')->nullable();
            $table->text('special_needs')->nullable();
            $table->timestamp('last_updated')->useCurrent();
            $table->foreignId('social_worker_id')->nullable()->constrained('users')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('child_cases');
    }
};
