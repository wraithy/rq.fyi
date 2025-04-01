<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('link_reports', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('link_id')->nullable()->index();
            $table->string('ip_address', 150)->nullable();
            $table->string('user_agent', 150)->nullable();
            $table->string('country', 45)->nullable();
            $table->string('port', 45)->nullable();
            $table->string('timestamp', 45)->nullable();
            $table->integer('height')->nullable();
            $table->integer('width')->nullable();
            $table->integer('ram')->nullable();
            $table->string('os', 45)->nullable();
            $table->string('cookies_enabled', 45)->nullable();
            $table->string('app_name', 45)->nullable();
            $table->string('app_version', 150)->nullable();
            $table->string('language', 45)->nullable();

            $table->foreign('link_id')->references('id')->on('links');
        });
    }

    public function down()
    {
        Schema::dropIfExists('link_reports');
    }
};
