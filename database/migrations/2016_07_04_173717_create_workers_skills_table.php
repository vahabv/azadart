<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkersSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::create('workers_skills', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('skills_id');
            $table->integer('worker_id');
            $table->foreign('worker_id')->references('id')->on('workers');
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
       Schema::drop('workers_skills');
    }
}
