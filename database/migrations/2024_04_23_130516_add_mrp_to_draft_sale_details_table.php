<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMrpToDraftSaleDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('draft_sale_details', function (Blueprint $table) {
            //
            $table->double('mrp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('draft_sale_details', function (Blueprint $table) {
            //
            $table->dropcolumn('mrp');
        });
    }
}
