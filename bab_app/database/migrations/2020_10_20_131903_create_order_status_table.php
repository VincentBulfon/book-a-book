<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderStatusTable extends Migration
{
    public function up()
    {
        Schema::create('order_status', function (Blueprint $table) {
            $table->timestamps();
            $table->integer('order_id')->unsigned();
            $table->integer('status_id')->unsigned();
        });
    }

    public function down()
    {
        Schema::drop('order_status');
    }
}
