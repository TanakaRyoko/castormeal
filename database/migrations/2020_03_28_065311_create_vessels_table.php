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
            $table->date('estimate_time_of_loading');
            $table->date('time_of_arrival');
            $table->string('containers');
            $table->string('shipping_company');
            $table->text('name_of_vessel')->nullable();
            $table->date('bl_date')->nullable();
            $table->string('vessel_no')->nullable();
            $table->string('register_no')->nullable();
            $table->string('mt')->nullable();
            $table->text('bl_no')->nullable();
            $table->float('remmitance')->nullable();
            $table->float('unit_price')->nullable();
            $table->date('remmitance_date')->nullable();
            $table->float('rate')->nullable();
            $table->float('interest_rates')->nullable();
            $table->string('japanese_yen')->nullable();
            $table->boolean('bank_charge')->nullable();
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
