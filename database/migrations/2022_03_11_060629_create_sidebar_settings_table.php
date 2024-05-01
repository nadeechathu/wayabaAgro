<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSidebarSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sidebar_settings', function (Blueprint $table) {
            $table->id();
            $table->integer('users')->default(0);
            $table->integer('products')->default(0);
            $table->integer('inventory')->default(0);
            $table->integer('categories')->default(0);
            $table->integer('tags')->default(0);
            $table->integer('all_orders')->default(0);
            $table->integer('posts')->default(0);
            $table->integer('marketing')->default(0);
            $table->integer('web_pages')->default(0);
            $table->integer('zones')->default(0);
            $table->integer('promotions')->default(0);
            $table->integer('advertisement')->default(0);
            $table->integer('inquiries')->default(0);
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
        Schema::dropIfExists('sidebar_settings');
    }
}
