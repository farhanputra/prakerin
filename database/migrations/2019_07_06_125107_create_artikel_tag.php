<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtikelTag extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artikel_tags', function (Blueprint $table) {
            $table->increment('id');
            $table->unsignedInteger('artikel_id');
            $table->unsignedInteger('tag_id');

            $table->foreign('artikel_id')->references('id')->on('artikels')->onDelete('CASCADE');
            $table->foreign('tag_id')->references('id')->on('artikels')->onDelete('CASCADE');
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
