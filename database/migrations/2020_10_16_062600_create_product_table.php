<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('name', 100);
            $table->longText('description');
            $table->string('sku', 50);
            $table->string('formula', 50);
            $table->string('laboratory', 50);
            $table->string('product_code', 50);
            $table->decimal('purchase_price', 16, 2); 
            $table->decimal('sales_price', 16, 2); 
            $table->string('barcode');
            $table->longText('net_content');


            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('product');
    }
}
