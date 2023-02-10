<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffAppraisalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_appraisal', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->nullable();
            $table->string('position', 100)->nullable();
            $table->string('department', 255)->nullable();
            $table->date('appraisal_period')->nullable();
            $table->integer('overall_score')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff_appraisal');
    }
}
