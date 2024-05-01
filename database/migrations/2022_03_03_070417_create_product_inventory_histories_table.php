<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductInventoryHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_inventory_histories', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_id');
            $table->string('operation');
            $table->integer('quantity');
            $table->integer('running_quantity');            
            $table->integer('actual_reserved_quantity');
            $table->integer('order_id')->nullable();
            $table->integer('processed_by')->nullable(); 
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
        Schema::dropIfExists('product_inventory_histories');
    }
}
