<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToPromotionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('promotions', function (Blueprint $table) {
            $table->integer('type')->default(0)->after('id')->comment("0 => Other, 1 => Flash Deals");
            $table->timestamp('ends_at')->nullable()->after('status');
            $table->timestamp('starts_at')->nullable()->after('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('promotions', function (Blueprint $table) {
            $table->dropColumn('type');
            $table->dropColumn('ends_at');
            $table->dropColumn('starts_at');
        });
    }
}
