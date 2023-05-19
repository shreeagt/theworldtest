<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Video extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string('video_title',250);
            $table->string('video_url',250)->unique();
            $table->string('video_category_id',250);
            $table->string('video_tag',1000);
            $table->string('video_description',250);
            $table->string('video_keyword',250);
            $table->longText('video_body');
            $table->string('video_thumbnail',1000);
            $table->string('video_banner_type',250);
            $table->string('video_banner',1000);
            $table->enum('video_status', ['Draft', 'Publish', 'Archive']);
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
        //
    }
}
