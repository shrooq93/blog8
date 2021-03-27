<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryTable extends Migration
{
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {

		$table->integer('id',);
		$table->integer('website_id',);
		$table->string('title');
		$table->boolean('status');
		$table->boolean('is_deleted')->default('false');

        });
    }

    public function down()
    {
        Schema::dropIfExists('category');
    }
}