<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',50); //ユーザー名
            $table->string('email')->unique(); //メールアドレス
            $table->string('activity_area'); //活動地域
            $table->string('my_part'); //自分のパート
            $table->string('activity_level',100); //活動レベル
            $table->string('my_level',100); //自分のレベル感
            $table->string('genre'); //演奏ジャンル
            $table->string('favorite_artist',200)->nullable(); //好きなアーティスト.空白可
            $table->string('sex')->nullable(); //性別.空白可
            $table->integer('age')->nullable(); //年齢.空白可
            $table->string('activity_timezone')->nullable(); //活動時間帯.空白可
            $table->string('password'); //パスワード
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
