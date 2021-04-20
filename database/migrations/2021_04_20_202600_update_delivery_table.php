<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateDeliveryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('delivery', function (Blueprint $table) {
            $table->dropColumn('starting_coordinate');
            $table->dropColumn('destination_coordinate');
            $table->string('starting_latitude');
            $table->string('starting_longitude');
            $table->string('destination_latitude');
            $table->string('destination_longitude');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('delivery', function (Blueprint $table) {
            $table->dropColumn('starting_latitude');
            $table->dropColumn('starting_longitude');
            $table->dropColumn('destination_latitude');
            $table->dropColumn('destination_longitude');
        });
    }
}
