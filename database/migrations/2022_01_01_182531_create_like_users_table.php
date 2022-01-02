<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikeUsersTable extends Migration
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

            $table->foreign('to_userid')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('from_userid')->references('id')->on('users')->onDelete('cascade');
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
