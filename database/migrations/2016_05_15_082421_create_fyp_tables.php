<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFypTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sourceterminal');
            $table->string('destinationterminal');
            $table->string('companyname');
            $table->string('farelist');
            $table->string('status');
            $table->timestamp('starttime');
            $table->timestamp('endtime');
            
        });
        
        Schema::create('stops', function (Blueprint $table) {
            $table->increments('id');
            $table->string('stopname');
            $table->decimal('longitude', 10, 7);
            $table->decimal('latitude', 10, 7);

                    });


        Schema::create('appusers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('MAC');
            $table->string('email');
            $table->string('name');
            $table->timestamp('installingdate');
            
        });


        Schema::create('routes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('bus_id')->unsigned();
            $table->integer('stop_id')->unsigned();

            $table->foreign('bus_id')
                ->references('id')
                ->on('buses');

            $table->foreign('stop_id')
                ->references('id')
                ->on('stops');

                    });


               Schema::create('searches', function (Blueprint $table) {
            $table->integer('route_id')->unsigned();
            $table->foreign('route_id')
                  ->references('id')
                  ->on('routes');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
                  ->references('id')
                  ->on('appusers');
                });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::drop('searches');
        Schema::drop('routes');
        Schema::drop('appusers');
        Schema::drop('stops');
        Schema::drop('buses');
    }
}
