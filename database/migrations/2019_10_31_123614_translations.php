<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Translations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('translations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('namespace')->default('*');
            $table->index('namespace');
            $table->string('group');
            $table->index('group');
            $table->text('key');
            $table->text('text');
            $table->text('metadata')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('translations');
    }
}
