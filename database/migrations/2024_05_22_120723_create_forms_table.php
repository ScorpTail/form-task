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
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('tt_number');
            $table->unsignedTinyInteger('arrest_type');
            $table->timestamp('report_date');
            $table->unsignedBigInteger('unpaid_goods');
            $table->unsignedTinyInteger('adult_type');
            $table->unsignedTinyInteger('problem_solve_type');
            $table->string('problem_solve_text')->nullable();
            $table->timestamp('theft_time');
            $table->string('cam_and_registrator_number_1');
            $table->timestamp('arrest_time');
            $table->string('cam_and_registrator_number_2');
            $table->timestamp('pay_time');
            $table->string('cam_and_registrator_number_3');
            $table->string('thief_photo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};
