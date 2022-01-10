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
            $table->string('order_id');
            $table->integer('customer_id');
            $table->date('due-date');
            $table->decimal('subtotal');
            $table->decimal('total');
            $table->integer('discount');
            $table->string('user');
            $table->string('note');
            $table->string('status');
            $table->string('shipping_address_line_1');
            $table->string('shipping_address_line_2');
            $table->string('billing_address_line_1');
            $table->string('billing_address_line_2');

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
