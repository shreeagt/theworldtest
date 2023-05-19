<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('blog_title',250);
            $table->string('blog_url',250)->unique();
            $table->string('blog_category_id',250);
            $table->string('blog_tag',1000);
            $table->string('blog_description',250);
            $table->string('blog_keyword',250);
            $table->longText('blog_body')->nullable();
            $table->string('blog_thumbnail',1000);
            $table->string('blog_banner_type',250);
            $table->string('blog_banner',1000);
            $table->enum('blog_status', ['Draft', 'Publish', 'Archive']);
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
        Schema::dropIfExists('blogs');
    }
}
