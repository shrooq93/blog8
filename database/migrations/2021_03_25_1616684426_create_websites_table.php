<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebsitesTable extends Migration
{
    public function up()
    {
        Schema::create('websites', function (Blueprint $table) {

		$table->integer('id',);
		$table->string('name');
		$table->string('webiste_url');
		$table->string('api_key');
		$table->string('meta_title');
		$table->string('meta_keywords');
		$table->text('meta_description');
		$table->timestamp('created_at');
		$table->timestamp('updated_at');

        });
    }

    public function down()
    {
        Schema::dropIfExists('websites');
    }
}