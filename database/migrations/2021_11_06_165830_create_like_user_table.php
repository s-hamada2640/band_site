<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikeUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('like_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('to_userid'); //いいねされたユーザー
            $table->unsignedBigInteger('from_userid'); //いいねしたユーザー
            $table->timestamps();

            $table->foreign('to_userid')->references('id')->on('users');
            $table->foreign('from_userid')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('like_users');
    }
}
