<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PropertyItemNameFieldToAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('asset', function (Blueprint $table) {
           $table->string("property_item_name");
            $table->string("item_location");
            $table->string("serial_number");
            $table->string("make_model");
            $table->string("notes");
            $table->string("upload_image_property_receipts");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('asset', function (Blueprint $table) {
             $table->dropColumn(['property_item_name', 'item_location', 'serial_number', 'make_model', 'notes', 'upload_image_property_receipts']);
        });
    }
}
