<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Destocks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destocks', function (Blueprint $table) {
            $table->string('id', 36)->primary();
            $table->string('path')->unique();
            $table->string('name')->primary();
            $table->integer('amount');
            $table->float('price');
            $table->float('sellprice');
            $table->string('origin')->nullable();
            $table->string('date')->nullable();
            $table->string('note')->nullable();
            
        });
        DB::statement('ALTER Table destocks add orderid INTEGER NOT NULL UNIQUE AUTO_INCREMENT;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('destocks');
    }
}
