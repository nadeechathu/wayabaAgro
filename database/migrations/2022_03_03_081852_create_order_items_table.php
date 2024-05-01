<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('order_id');
            $table->bigInteger('product_id');
            $table->string('product_name');
            $table->bigInteger('quantity');
            $table->decimal('unit_price', 10, 2)->default(0);
            $table->decimal('weight', 10, 2)->default(0);
            $table->decimal('discount', 10, 2)->default(0);
            $table->integer('is_reserved')->default(0);
            $table->integer('actual_reserved_quantity')->default(0);
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
        Schema::dropIfExists('order_items');
    }
}
