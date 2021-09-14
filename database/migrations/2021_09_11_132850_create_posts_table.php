<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->unsigned(); //外部キー ユーザーID
            $table->string('title'); //投稿タイトル
            $table->string('message',200)->nullable();//コメント、メッセージ
            $table->string('activity_area'); //活動地域
            $table->string('recruitment_part'); //募集パート
            $table->string('required_level',100); //求めるレベル感
            $table->string('band_level',100); //バンドのレベル感
            $table->string('activity_level',100); //活動レベル
            $table->string('favorite_artist',200)->nullable(); //好きなアーティスト
            $table->string('genre'); //バンドのジャンル
            $table->string('sex')->nullable(); //性別
            $table->integer('age')->nullable(); //求める年齢
            $table->string('activity_timezone')->nullable(); //活動時間帯
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
