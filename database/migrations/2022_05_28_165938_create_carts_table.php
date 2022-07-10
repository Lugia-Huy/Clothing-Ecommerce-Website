<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->string('id_user')->nullable();
            $table->string('name')->nullable();
            $table->string('id_product')->nullable();
            $table->string('product_title')->nullable();
            $table->string('quatity')->nullable();
            $table->string('size')->nullable();
            $table->string('price')->nullable();
            $table->string('coupon')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('carts');
    }
};
