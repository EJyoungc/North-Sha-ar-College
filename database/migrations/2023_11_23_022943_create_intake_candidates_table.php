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
        Schema::create('intake_candidates', function (Blueprint $table) {
            $table->id();
            $table->integer('intake_id');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('surname');
            $table->string('title');
            $table->string('gender');
            $table->string('age');
            $table->string('nationality');
            $table->string('mobile_number');
            $table->string('email');
            $table->string('physical_address');
            $table->string('next_of_kin_address');
            $table->string('next_of_kin_mobile');
            $table->string('next_of_kin_email');
            $table->string('educational_type'); 
            $table->string('transcript_copy_file');
            $table->string('subject_1')->nullable();
            $table->string('grade_1')->nullable();
            $table->string('subject_2')->nullable();
            $table->string('grade_2')->nullable();
            $table->string('subject_3')->nullable();
            $table->string('grade_3')->nullable();
            $table->string('subject_4')->nullable();
            $table->string('grade_4')->nullable();
            $table->string('subject_5')->nullable();
            $table->string('grade_5')->nullable();
            $table->string('subject_6')->nullable();
            $table->string('grade_6')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('intake_candidates');
    }
};
