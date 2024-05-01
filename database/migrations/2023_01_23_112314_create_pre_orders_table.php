<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pre_orders', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->string('customer_name')->nullable();
            $table->string('phone_number')->nullable();       
            $table->string('email')->nullable();
            $table->string('quantity')->nullable();
            $table->longText('remark')->nullable();
            $table->integer('status')->default(0)->comment("0 => inactive, 1 => active");
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
        Schema::dropIfExists('pre_orders');
    }
}
