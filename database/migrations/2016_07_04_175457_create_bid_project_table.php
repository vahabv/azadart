<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBidProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invite_worker', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('worker_id');
            $table->foreign('worker_id')->references('id')->on('workers');
            $table->integer('project_id');
            $table->foreign('project_id')->references('id')->on('projects');
            $table->integer('status');
            $table->string('budget',255);
            $table->date('deadline');
            $table->text('note');
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
       Schema::drop('invite_worker');
    }
}
