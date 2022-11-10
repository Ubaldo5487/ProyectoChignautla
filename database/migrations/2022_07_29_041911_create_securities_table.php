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
        Schema::create('securities', function (Blueprint $table) {
            $table->id();
            $table->string('name', 20);
            $table->string('fatherlastname', 20);
            $table->string('motherlastname', 20);
            $table->bigInteger('phonenumber')->length(4);
            $table->tinyInteger('age');
            $table->string('colony', 30);
            $table->string('street1', 255);
            $table->string('street2', 255)->nullable();
            $table->string('area', 100);
            $table->string('problem', 30);
            $table->string('status')->default('Pendiente');
            $table->text('description')->nullable();
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
        Schema::dropIfExists('securities');
    }
};
