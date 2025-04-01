<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('links', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('user_id')->nullable()->index();
            $table->string('redirect_link', 500)->nullable();
            $table->string('new_link', 100)->nullable()->unique();
            $table->string('base_url', 100)->nullable();
            $table->string('tags', 45)->nullable();
            $table->integer('sleep_time')->nullable();
            $table->string('get_ip', 45)->nullable();
            $table->string('ip', 45)->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('links');
    }
};
