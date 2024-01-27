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
        Schema::create('products', function (Blueprint $table) {
            $table->char('product_id',10)->primary();
            $table->string('product_name', 255);
            $table->text('product_description');
            $table->integer('product_price');
            $table->char('category_id', 10);
            $table->text('product_image_url');
            $table->timestamps();

            $table->index('category_id');
            $table->foreign('category_id')->references('category_id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
