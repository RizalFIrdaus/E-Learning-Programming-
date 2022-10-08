<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMCCSSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_c__c_s_s', function (Blueprint $table) {
            $table->id();
            $table->string('soal', 250);
            $table->string('pil_a', 250);
            $table->string('pil_b', 250);
            $table->string('pil_c', 250);
            $table->string('pil_d', 250);
            $table->string('img', 250);
            $table->boolean('is_act');
            $table->string('radioAct', 2);
            $table->string('kunci', 250);
            $table->string('user_kunci', 250);
            $table->boolean('benar');
            $table->float('nilai', 100);
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
        Schema::dropIfExists('m_c__c_s_s');
    }
}
