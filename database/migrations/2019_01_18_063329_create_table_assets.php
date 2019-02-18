<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAssets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::table('assets', function (Blueprint $table) {
            
            $table->string('property_item_name');
            $table->string('item_location');
            $table->string('serial_number');
            $table->string('make_model');
            $table->string('notes');
            $table->string('upload_image_property_receipts');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists('table_assets');
    }
}
