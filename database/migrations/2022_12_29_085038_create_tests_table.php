<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests',function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('ClientId');
            $table->string('status');
            $table->date('date');
            $table->unsignedBigInteger("ServiceID");
            $table->foreign("ServiceID")->references('ServiceID')->on("services");
            $table->foreign("ClientId")->references('client_id')->on('clients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tests');
    }
};
