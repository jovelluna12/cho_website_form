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
        Schema::dropIfExists('tests');
        Schema::create('tests',function(Blueprint $table){
            $table->id();
            $table->unsignedInteger('ClientId');
            $table->string('status');
            $table->string('Service');
            $table->softDeletes();
            $table->date('date');
            $table->timestamps();
            $table->foreign("ClientId")->references('client_id')->on('clients')->onDelete('cascade');
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
