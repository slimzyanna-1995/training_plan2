<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateStaffAppraisalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('staff_appraisal', function (Blueprint $table) {
            // $table->id();
            $table->string('name', 30)->nullable()->change();
            $table->string('position', 50)->nullable()->change();
            $table->string('department', 50)->nullable()->change();
            $table->date('appraisal_period')->nullable()->change();
            $table->integer('overall_score')->nullable()->change();

            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('staff_appraisal', function (Blueprint $table) {
            // $table->id();
            $table->string('name', 30)->nullable()->change();
            $table->string('position', 50)->nullable()->change();
            $table->string('department', 50)->nullable()->change();
            $table->date('appraisal_period')->nullable()->change();
            $table->integer('overall_score')->nullable()->change();

            // $table->timestamps();
        });
    }
}
