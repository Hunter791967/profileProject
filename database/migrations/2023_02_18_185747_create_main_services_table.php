<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_services', function (Blueprint $table) {
            $table->id();
            $table->string('main_title')->default('MAIN_TITLE');
            $table->string('main_image')->nullable();
            $table->longText('main_desc')->nullable();
            $table->longText('sub_desc')->nullable();
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
        Schema::dropIfExists('main_services');
    }
};
