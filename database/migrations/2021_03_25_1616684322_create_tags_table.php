<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagsTable extends Migration
{
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {

		$table->integer('id',);
		$table->string('title');
		$table->boolean('status')->default('false');

        });
    }

    public function down()
    {
        Schema::dropIfExists('tags');
    }
}