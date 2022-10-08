<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCSSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c_s_s', function (Blueprint $table) {
            $table->id();
            $table->string("embed_vid");
            $table->string("desc_vid", 1000);
            $table->string("list_materi");
            $table->string("tutor");
            $table->string("title_tutor");
            $table->string("img");
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
        Schema::dropIfExists('c_s_s');
    }
}
