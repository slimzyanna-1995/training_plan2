<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTrainingRegisterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('training_register', function (Blueprint $table) {
            // $table->id();
            $table->string('name', 30)->nullable()->change();
            $table->string('topic', 70)->nullable()->change();
            $table->date('training_date')->nullable()->change();
            $table->time('duration')->nullable()->change();
            $table->integer('period')->nullable()->change();
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
        Schema::table('training_register', function (Blueprint $table) {
            // $table->id();
            $table->string('name', 30)->nullable()->change();
            $table->string('topic', 70)->nullable()->change();
            $table->date('training_date')->nullable()->change();
            $table->time('duration')->nullable()->change();
            $table->intesger('period')->nullable()->change();
            // $table->timestamps();
        });
    }
}
