<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->string('error_no')->nullable();
            $table->string('order_no');
            $table->text('consignee_code');
            $table->text('consignee')->nullable();
            $table->string('hub_code')->nullable();
            $table->text('hub_name')->nullable();
            $table->integer('product_code');
            $table->text('product')->nullable();
            $table->string('yoryo')->nullable();
            $table->string('mt')->nullable();
            $table->string('supply_unit_price')->nullable();
            $table->string('supply_price')->nullable();
            $table->string('supply_month')->nullable();
            $table->date('ship_date')->nullable();
            $table->string('supply_delivery_condition')->nullable();
            $table->string('recieving_delivery_condition')->nullable();
            $table->string('jibetu')->nullable();
            $table->string('shupou_no')->nullable();
            $table->string('zaikokubun')->nullable();
            $table->string('vessel')->nullable();
            $table->string('yamamoto')->nullable();
            $table->date('shupou_uketuke_date')->nullable();
            $table->string('setuzoku_code')->nullable();
            $table->string('error_code')->nullable();
            $table->string('error_message')->nullable();
            
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
        Schema::dropIfExists('reports');
    }
}
