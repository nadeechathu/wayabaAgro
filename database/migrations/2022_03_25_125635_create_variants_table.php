<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVariantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('variants', function (Blueprint $table) {
            $table->id();
            $table->string('product_id');
            $table->integer('status')->default(0)->comment("0=>inactive, 1=>active");
            $table->string('variant_name');
            $table->string('description')->nullable();
            $table->decimal('unit_price',10,2)->default(0);
            $table->decimal('packing_cost',10,2)->default(0);
            $table->decimal('selling_price',10,2)->default(0);
            $table->decimal('weight',10,2)->default(0);
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
        Schema::dropIfExists('variants');
    }
}
