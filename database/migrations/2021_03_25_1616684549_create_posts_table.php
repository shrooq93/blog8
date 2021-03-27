<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {

		$table->integer('id',);
		$table->integer('website_id',);
		$table->string('post_type');
		$table->string('title');
		$table->string('meta_title');
		$table->string('meta_keywords');
		$table->text('meta_description');
		$table->text('desciption');
		$table->text('feature_image_url');
		$table->integer('category_id',);
		$table->tinyInteger('status',);
		$table->boolean('is_deleted')->default('false');
		$table->timestamp('created_at');
		$table->timestamp('updated_at');

        });
    }

    public function down()
    {
        Schema::dropIfExists('posts');
    }
}