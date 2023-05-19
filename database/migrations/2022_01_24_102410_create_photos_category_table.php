<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhotosCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos_category', function (Blueprint $table) {
            $table->id();
            $table->string('category_title',250);
            $table->string('category_description',250);
            $table->longText('category_body')->nullable();
            $table->string('category_thumbnail',1000);
            
            $table->string('category_banner',1000);
            $table->enum('category_status', ['Y', 'N']);
            $table->string('seo_title',250);
            $table->string('seo_tag',1000);
            $table->string('seo_keyword',250);
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
        Schema::dropIfExists('photos_category');
    }
}
