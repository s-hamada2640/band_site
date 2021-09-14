<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'user_id' => 1,
            'title' => 'ギター募集',
            'message' => 'ギター募集してます。ヨルシカ好き集まれ。',
            'activity_area' => '東京',
            'recruitment_part' => 'ギター',
            'required_level' => 'ギター歴3年以上',
            'band_level' => 'コピーバンド',
            'activity_level' => '学園祭で演奏',
            'favorite_artist' => 'ヨルシカ',
            'genre' => 'ロック',
            'sex' => '男性',
            'age' => 20,
            'activity_timezone' => '日中',
            'created_at' => "2021-09-12 15:48:19",
        ];
        DB::table('posts')->insert($param);

        $param = [
            'user_id' => 1,
            'title' => 'ドラム募集',
            'message' => 'ドラム募集してます。初心者大歓迎！',
            'activity_area' => '東京',
            'recruitment_part' => 'ドラム',
            'required_level' => 'ドラム歴3年以上',
            'band_level' => '完全アマ思考',
            'activity_level' => '月に一ライブハウスで演奏',
            'favorite_artist' => 'YOASOBI',
            'genre' => 'J-pop',
            'age' => 30,
            'activity_timezone' => '夕方~夜',
            'created_at' => "2021-09-12 15:48:19",
        ];
        DB::table('posts')->insert($param);

        $param = [
            'user_id' => 1,
            'title' => 'ピアノ募集',
            'message' => 'ピアノ募集してます。うまい人探してます。',
            'activity_area' => '東京',
            'recruitment_part' => 'ピアノ',
            'required_level' => 'ピアノ歴3年以上',
            'band_level' => '完全プロ思考',
            'activity_level' => 'ライブハウスで定期的に演奏',
            'favorite_artist' => 'ショパン',
            'genre' => 'クラシック',
            'age' => 40,
            'activity_timezone' => '夜間',
            'created_at' => "2021-09-12 15:48:19",
        ];
        DB::table('posts')->insert($param);
    }
}
