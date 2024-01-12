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
            $table->char('ProductID',5)->primary();
            $table->string('ProductName', 255);
            $table->text('ProductDescription');
            $table->integer('ProductPrice');
            $table->char('CategoryID', 5);
            $table->text('ProductImageURL');
            $table->timestamps();

            $table->index('CategoryID');
            $table->foreign('CategoryID')->references('CategoryID')->on('categories')->onDelete('cascade');
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
