<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
        public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->foreign('id')->references('skills_id')->on('workers_skills');
            $table->string('skill_name',20);   
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
       Schema::drop('skills');
    }
}