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
            'message' => 'ギター募集してます。',
            'activity_area' => '東京',
            'recruitment_part' => 'ギター',
            'required_level' => 'ギター歴3年以上',
            'band_level' => 'コピーバンド',
            'favorite_artist' => 'ヨルシカ',
            'genre' => 'Rock',
        ];
        DB::table('posts')->insert($param);

        $param = [
            'user_id' => 2,
            'title' => 'ドラム募集',
            'message' => 'ドラム募集してます。',
            'activity_area' => '東京',
            'recruitment_part' => 'ドラム',
            'required_level' => 'ドラム歴3年以上',
            'band_level' => '完全アマ思考',
            'favorite_artist' => 'YOASOBI',
            'genre' => 'Pop',
        ];
        DB::table('posts')->insert($param);

        $param = [
            'user_id' => 1,
            'title' => 'ピアノ募集',
            'message' => 'ピアノ募集してます。',
            'activity_area' => '東京',
            'recruitment_part' => 'ピアノ',
            'required_level' => 'ピアノ歴3年以上',
            'band_level' => '完全プロ思考',
            'favorite_artist' => 'ショパン',
            'genre' => 'クラシック',
        ];
        DB::table('posts')->insert($param);
    }
}
