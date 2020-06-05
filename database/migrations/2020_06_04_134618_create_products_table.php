<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Title', 100)->nullable(false);
            $table->text('Description');
            $table->decimal('Price', 8, 2)->default(0.0);
            $table->enum('Size', ['XS','S','M','L','XL']);
            $table->string('url_image', 100)->nullable(true);
            $table->enum('Status', ['published', 'unpublished'])->default('unpublished');
            $table->enum('Code', ['solde','new'])->default('new');
            $table->string('reference', 16);
            $table->unsignedInteger('categorie_id');
            $table->timestamps();

            $table->foreign('categorie_id')->references('id')->on('categories');
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
}
