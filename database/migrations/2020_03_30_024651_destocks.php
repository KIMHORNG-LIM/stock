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
        Schema::create('stocks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('path')->unique();
            $table->string('name')->unique();
            $table->integer('stock_amount');
            $table->float('price');
            $table->float('sellprice');
            $table->string('origin')->nullable();
            $table->string('stock_date')->nullable();
            $table->string('note')->nullable();
            
        });
      
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
