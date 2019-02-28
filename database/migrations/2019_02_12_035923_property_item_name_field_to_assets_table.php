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
        Schema::table('assets', function (Blueprint $table) {
           $table->string("other_ownership")->nullable();
           $table->string("property_item_name")->nullable();
           $table->string("item_location")->nullable();
           $table->string("serial_number")->nullable();
           $table->string("make_model")->nullable();
           $table->string("notes")->nullable();
           $table->string("upload_image_property_receipts")->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('assets', function (Blueprint $table) {
             $table->dropColumn(['property_item_name', 'item_location', 'serial_number', 'make_model', 'notes', 'upload_image_property_receipts']);
        });
    }
}
