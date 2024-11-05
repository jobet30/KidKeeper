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
        Schema::create('support_programs', function (Blueprint $table) {
            $table->id();
            $table->string('program_name');
            $table->text('description')->nullable();
            $table->text('eligibility_criteria')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('contact_information')->nullable();
            $table->enum('enrollment_status', ['Open', 'Closed', 'Pending'])->nullable();
            $table->integer('number_of_participants')->nullable();
            $table->text('program_outcomes')->nullable();
            $table->timestamp('last_updated')->useCurrent()->useCurrentOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('support_programs');
    }
};
