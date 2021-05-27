<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InternetProtocolMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('internet_protocol', function (Blueprint $table) {
            $table->increments('id');
            $table->string('value');
            $table->integer('requests');
            $table->string('is_banned');
            $table->integer('referer_not_defined');
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
        Schema::dropIfExists('internet_protocol');
    }
}
