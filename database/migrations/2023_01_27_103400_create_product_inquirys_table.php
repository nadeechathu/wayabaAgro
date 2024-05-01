<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductInquirysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_inquiries', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->string('product_name')->nullable();     
            $table->string('quantity')->nullable();     
            $table->string('customer_name')->nullable();     
            $table->string('phone')->nullable();     
            $table->string('email')->nullable();     
            $table->string('address')->nullable();     
            $table->string('country_id')->nullable();     
            $table->longText('notes')->nullable();     
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
        Schema::dropIfExists('product_inquiries');
    }
}
