<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->decimal('tracking_number', 10, 4)->default(0);
            $table->bigInteger('zone_id')->nullable();
            $table->integer('order_status')->default(0);
            $table->integer('inventory_status')->default(0);
            $table->integer('is_approved')->default(0);
            $table->text('cancelled_reason')->nullable();
            $table->bigInteger('customer_id')->nullable();
            $table->decimal('order_total', 10 ,2)->default(0);
            $table->decimal('sub_total', 10 , 2)->default(0);
            $table->decimal('discount', 10 , 2)->default(0);
            $table->decimal('shipping_cost', 10 , 2)->default(0);
            $table->decimal('total_weight', 10 , 3)->default(0);
            $table->string('payment_method');
            $table->text('notes')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
