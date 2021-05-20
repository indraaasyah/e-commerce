<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveColumnProductAttributeValueIdInProductInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product_inventories', function (Blueprint $table) {
            $table->dropForeign(['product_attribute_values_id']);
            $table->dropColumn('product_attribute_values_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_inventories', function (Blueprint $table) {
            $table->unsignedBigInteger('product_attribute_values_id');
            $table->foreign('product_attribute_values_id')->references('id')->in('product_attribute_values')->onDelete('cascade');
        });
    }
}
