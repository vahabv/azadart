<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('worker_name',255);
            $table->string('worker_surname',255);
            $table->string('worker_gender',20);
            $table->date('woker_bdate');
            $table->string('worker_profession',255);
            $table->string('worker_portofolio',255);
            $table->string('worker_hourrate',255);
            $table->text('worker_about');
            $table->string('worker_country',255);
            $table->integer('worker_cprojects');
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
       Schema::drop('workers');
    }
}
