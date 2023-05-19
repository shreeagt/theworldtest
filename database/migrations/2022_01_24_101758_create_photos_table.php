<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {
            $table->id();
            $table->string('photos_title',250);
            $table->string('photos_url',250)->unique();
            $table->string('photos_category_id',250);
            $table->string('photos_tag',1000);
            $table->string('photos_description',250);
            $table->string('photos_keyword',250);
            $table->longText('photos_body')->nullable();
            $table->string('photos_thumbnail',1000);
            $table->string('photos_banner_type',250);
            $table->string('photos_banner',1000);
            $table->enum('photos_status', ['Draft', 'Publish', 'Archive']);
            $table->timestamp('published_date')->nullable();
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
        Schema::dropIfExists('photos');
    }
}
