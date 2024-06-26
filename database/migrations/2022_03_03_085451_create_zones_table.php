<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zones', function (Blueprint $table) {
            $table->id();
            $table->string('zone_name');
            $table->string('zip_code');
            $table->string('zone_description');
            $table->decimal('shipping_cost', 10, 2)->default(0);
            $table->decimal('weight_margin', 10, 2)->default(0);
            $table->decimal('minimum_cost', 10, 2)->default(0);
            $table->integer('status')->default(0)->comment("0 => inactive. 1 => active");
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
        Schema::dropIfExists('zones');
    }
}
