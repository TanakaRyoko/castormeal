<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVesselsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vessels', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            
            $table->string('contract_no');
            $table->string('product');
            $table->string('port_of_discharging');
            $table->string('estimate_time_of_loading');
            $table->string('time_of_arrival');
            $table->string('containers');
            $table->string('shipping_company');
            $table->string('bl')->nullable();
            $table->string('vessel_no')->nullable();
            $table->string('register_no')->nullable();
            $table->string('mt')->nullable();
            $table->string('bl_no')->nullable();
            $table->integer('remmitance')->nullable();
            $table->string('unit_price')->nullable();
            $table->string('remmitance_date')->nullable();
            $table->string('rate')->nullable();
            $table->string('interest_rates')->nullable();
            $table->string('japanese_yen')->nullable();
            $table->string('bank_charge')->nullable();
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
        Schema::dropIfExists('vessels');
    }
}
