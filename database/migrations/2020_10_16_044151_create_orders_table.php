<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('agent_sales_id');
            $table->unsignedBigInteger('inventory_id');
            $table->longText('description');
            $table->decimal('unit_cost', 16, 2); 
            $table->decimal('discount', 16, 2);            


            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('agent_sales_id')->references('id')->on('agents_sales')->onDelete('cascade');
             $table->foreign('inventory_id')->references('id')->on('inventories')->onDelete('cascade');

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
        Schema::dropIfExists('orders');
    }
}
