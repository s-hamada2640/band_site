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
        $param = [ //1
            'user_id' => 1,
            'title' => 'ギター募集',
            'message' => 'ギター募集してます。ヨルシカ好き集まれ。',
            'activity_area' => '東京都',
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

        $param = [ //2
            'user_id' => 1,
            'title' => 'ドラム募集',
            'message' => 'ドラム募集してます。初心者大歓迎！',
            'activity_area' => '東京都',
            'recruitment_part' => 'ドラム',
            'required_level' => 'ドラム歴3年以上',
            'band_level' => '完全アマ思考',
            'activity_level' => '月に一ライブハウスで演奏',
            'favorite_artist' => 'YOASOBI',
            'genre' => 'J-pop',
            'sex' => '男性',
            'age' => 30,
            'activity_timezone' => '夕方~夜',
            'created_at' => "2021-09-12 15:48:19",
        ];
        DB::table('posts')->insert($param);

        $param = [ //3
            'user_id' => 1,
            'title' => 'ピアノ募集',
            'message' => 'ピアノ募集してます。うまい人探してます。',
            'activity_area' => '大阪府',
            'recruitment_part' => 'ピアノ',
            'required_level' => 'ピアノ歴3年以上',
            'band_level' => '完全プロ思考',
            'activity_level' => 'ライブハウスで定期的に演奏',
            'favorite_artist' => 'ショパン',
            'genre' => 'クラシック',
            'sex' => '男性',
            'age' => 60,
            'activity_timezone' => '夜間',
            'created_at' => "2021-09-12 15:48:19",
        ];
        DB::table('posts')->insert($param);

    $param = [ //4
        'user_id' => 1,
        'title' => 'ベース募集',
        'message' => 'ベース募集してます。同じレベルくらいの方と組みたいです。',
        'activity_area' => '千葉県',
        'recruitment_part' => 'ベース',
        'required_level' => 'ベース歴3ヶ月以上',
        'band_level' => 'ベース',
        'activity_level' => '週に一回セッション',
        'favorite_artist' => 'クイーン',
        'genre' => 'ロック',
        'sex' => '男性',
        'age' => 20,
        'activity_timezone' => '夜間',
        'created_at' => "2021-09-12 15:48:19",
    ];
    DB::table('posts')->insert($param);

    $param = [ //5
        'user_id' => 1,
        'title' => 'ピアノ募集',
        'message' => 'ピアノ募集してます。自信のある方応募ください。',
        'activity_area' => '東京都',
        'recruitment_part' => 'ピアノ',
        'required_level' => 'ピアノ歴10年以上',
        'band_level' => '完全プロ思考',
        'activity_level' => 'バーでお客さん演奏',
        'favorite_artist' => 'ベートヴェン',
        'genre' => 'ジャズ',
        'sex' => '男性',
        'age' => 50,
        'activity_timezone' => '夜間',
        'created_at' => "2021-09-12 15:48:19",
    ];
    DB::table('posts')->insert($param);

    $param = [ //6
        'user_id' => 1,
        'title' => 'ギター募集',
        'message' => 'ギター募集してます。ボカロ好き歓迎。',
        'activity_area' => '神奈川県',
        'recruitment_part' => 'ギター',
        'required_level' => 'ギター歴3年以上',
        'band_level' => 'コピーバンド',
        'activity_level' => 'ライブハウスで定期的に演奏',
        'favorite_artist' => 'DECO*27',
        'genre' => 'ボーカロイド',
        'sex' => '女性',
        'age' => 10,
        'activity_timezone' => '夜間',
        'created_at' => "2021-09-13 15:48:19",
    ];
    DB::table('posts')->insert($param);

    $param = [ //7
        'user_id' => 1,
        'title' => 'シンセサイザー募集',
        'message' => 'シンセサイザー募集してます。うまい人探してます。',
        'activity_area' => '茨城県',
        'recruitment_part' => 'シンセサイザー',
        'required_level' => 'シンセサイザー歴3年以上',
        'band_level' => '完全プロ思考',
        'activity_level' => 'ライブハウスで定期的に演奏',
        'favorite_artist' => 'official髭男dism',
        'genre' => 'ポップ',
        'sex' => '男性',
        'age' => 30,
        'activity_timezone' => '朝',
        'created_at' => "2021-09-13 15:48:19",
    ];
    DB::table('posts')->insert($param);

    $param = [ //8
        'user_id' => 1,
        'title' => 'ピアノ募集',
        'message' => 'ピアノ募集してます。うまい人探してます。',
        'activity_area' => '埼玉県',
        'recruitment_part' => 'ピアノ',
        'required_level' => 'ピアノ歴3年以上',
        'band_level' => 'アマチュア思考',
        'activity_level' => 'コンサートで演奏',
        'favorite_artist' => 'ショパン',
        'genre' => 'ジャズ',
        'sex' => '女性',
        'age' => 40,
        'activity_timezone' => '夜間',
        'created_at' => "2021-09-14 15:48:19",
    ];
    DB::table('posts')->insert($param);

    $param = [ //9
        'user_id' => 1,
        'title' => 'ボーカル募集',
        'message' => 'ボーカル募集してます。一緒にプロを目指しませんか？',
        'activity_area' => '東京都',
        'recruitment_part' => 'ボーカル',
        'required_level' => 'ボーカルの経験のある方',
        'band_level' => '完全プロ思考',
        'activity_level' => 'プロを目指す',
        'favorite_artist' => 'ヨルシカ',
        'genre' => 'ロック',
        'sex' => '女性',
        'age' => 20,
        'activity_timezone' => '夜間',
        'created_at' => "2021-09-14 15:48:19",
    ];
    DB::table('posts')->insert($param);

    $param = [ //10
        'user_id' => 1,
        'title' => 'ギター募集',
        'message' => 'LISA好きな人募集。',
        'activity_area' => '千葉県',
        'recruitment_part' => 'ギター',
        'required_level' => 'ギター歴1年以上',
        'band_level' => 'アマチュア思考',
        'activity_level' => 'ライブハウスで定期的に演奏',
        'favorite_artist' => 'LISA',
        'genre' => 'アニソン',
        'sex' => '気にしない',
        'age' => 30,
        'activity_timezone' => '夜間',
        'created_at' => "2021-09-14 15:48:19",
    ];
    DB::table('posts')->insert($param);

    $param = [ //11
        'user_id' => 1,
        'title' => 'ドラム募集',
        'message' => 'ドラム募集してます。初心者バンドです、楽しくやりましょう。',
        'activity_area' => '北海道',
        'recruitment_part' => 'ドラム',
        'required_level' => '未経験OK',
        'band_level' => '初心者バンド',
        'activity_level' => 'ライブハウスで演奏を目標',
        'favorite_artist' => 'スピッツ',
        'genre' => 'ロック',
        'sex' => '男性',
        'age' => 40,
        'activity_timezone' => '日中',
        'created_at' => "2021-09-15 15:48:19",
    ];
    DB::table('posts')->insert($param);

    $param = [ //12
        'user_id' => 1,
        'title' => 'ボーカル募集',
        'message' => 'ボーカル募集してます。文化祭で歌ってくれる方探してます。',
        'activity_area' => '広島県',
        'recruitment_part' => 'ボーカル',
        'required_level' => 'ボーカル経験のある方',
        'band_level' => 'アマチュアバンド',
        'activity_level' => '文化祭で演奏',
        'favorite_artist' => 'Eve',
        'genre' => 'pop',
        'sex' => '男性',
        'age' => 10,
        'activity_timezone' => '夜間',
        'created_at' => "2021-09-15 15:48:19",
    ];
    DB::table('posts')->insert($param);

    $param = [ //13
        'user_id' => 1,
        'title' => 'ベース募集',
        'message' => 'ベース募集してます。楽しくできる方。',
        'activity_area' => '京都府',
        'recruitment_part' => 'ベース',
        'required_level' => 'ベース歴5年以上',
        'band_level' => 'アマチュアバンド',
        'activity_level' => '趣味レベルで演奏',
        'favorite_artist' => 'ザ・ビートルズ',
        'genre' => 'ロック',
        'sex' => '男性',
        'age' => 70,
        'activity_timezone' => '夜間',
        'created_at' => "2021-09-15 15:48:19",
    ];
    DB::table('posts')->insert($param);

    $param = [ //14
        'user_id' => 1,
        'title' => 'ボーカル募集',
        'message' => 'ボーカル募集してます。うまい人探してます。',
        'activity_area' => '愛知県',
        'recruitment_part' => 'ボーカル',
        'required_level' => 'デスボイスの出せる方',
        'band_level' => '完全プロ思考',
        'activity_level' => 'ライブハウスで定期的に演奏',
        'favorite_artist' => 'Fear,and Louthing Las Vegas',
        'genre' => 'メタル',
        'sex' => '男性',
        'age' => 20,
        'activity_timezone' => '夜間',
        'created_at' => "2021-09-15 15:48:19",
    ];
    DB::table('posts')->insert($param);

    $param = [ //15
        'user_id' => 1,
        'title' => 'ベース募集',
        'message' => 'ベース募集してます。うまい人探してます。',
        'activity_area' => '山梨県',
        'recruitment_part' => 'ベース',
        'required_level' => 'ライブハウスでの演奏経験のある方',
        'band_level' => 'ベース歴1年以上',
        'activity_level' => 'ライブハウスで定期的に演奏',
        'favorite_artist' => 'グリーン・デイ',
        'genre' => 'ロック',
        'sex' => '男性',
        'age' => 40,
        'activity_timezone' => '日中',
        'created_at' => "2021-09-15 15:48:19",
    ];
    DB::table('posts')->insert($param);

    $param = [ //16
        'user_id' => 1,
        'title' => 'ピアノ募集',
        'message' => 'ピアノ募集してます。うまい人探してます。',
        'activity_area' => '東京都',
        'recruitment_part' => 'ピアノ',
        'required_level' => 'ピアノ歴10年以上',
        'band_level' => '完全プロ思考',
        'activity_level' => 'ライブハウスで定期的に演奏',
        'favorite_artist' => 'ヨルシカ',
        'genre' => 'pop',
        'sex' => '男性',
        'age' => 50,
        'activity_timezone' => '夜間',
        'created_at' => "2021-09-15 15:48:19",
    ];
    DB::table('posts')->insert($param);

    $param = [ //17
        'user_id' => 1,
        'title' => 'ピアノ募集',
        'message' => 'ピアノ募集してます。うまい人探してます。',
        'activity_area' => '神奈川県',
        'recruitment_part' => 'ピアノ',
        'required_level' => 'ピアノ歴3年以上',
        'band_level' => 'コピーバンド',
        'activity_level' => 'ライブハウスで定期的に演奏',
        'favorite_artist' => 'supersell',
        'genre' => 'アニソン',
        'sex' => '女性',
        'age' => 20,
        'activity_timezone' => '朝',
        'created_at' => "2021-09-15 15:48:19",
    ];
    DB::table('posts')->insert($param);

    $param = [ //18
        'user_id' => 1,
        'title' => 'ギター募集',
        'message' => 'ギター募集してます。うまい人探してます。',
        'activity_area' => '広島県',
        'recruitment_part' => 'ギター',
        'required_level' => 'ギター歴3年以上',
        'band_level' => '完全プロ思考',
        'activity_level' => 'コンサート会場で演奏',
        'favorite_artist' => 'ブリンク-182',
        'genre' => 'ロック',
        'sex' => '男性',
        'age' => 70,
        'activity_timezone' => '夜間',
        'created_at' => "2021-09-15 15:48:19",
    ];
    DB::table('posts')->insert($param);

    $param = [ //19
        'user_id' => 1,
        'title' => 'ギター募集',
        'message' => 'ギター募集してます。うまい人探してます。',
        'activity_area' => '大阪府',
        'recruitment_part' => 'ギター',
        'required_level' => 'ギター歴3年以上',
        'band_level' => '完全プロ思考',
        'activity_level' => 'ライブハウスで定期的に演奏',
        'favorite_artist' => 'ザ・オフスプリング',
        'genre' => 'ロック',
        'sex' => '男性',
        'age' => 30,
        'activity_timezone' => '夜間',
        'created_at' => "2021-09-15 15:48:19",
    ];
    DB::table('posts')->insert($param);

    $param = [ //20
        'user_id' => 1,
        'title' => 'ドラム募集',
        'message' => 'ドラム募集してます。うまい人探してます。',
        'activity_area' => '千葉県',
        'recruitment_part' => 'ドラム',
        'required_level' => 'ドラム歴5年以上',
        'band_level' => '完全プロ思考',
        'activity_level' => 'ライブハウスで定期的に演奏',
        'favorite_artist' => 'クイーン',
        'genre' => 'ロック',
        'sex' => '男性',
        'age' => 60,
        'activity_timezone' => '夕方',
        'created_at' => "2021-09-15 15:48:19",
    ];
    DB::table('posts')->insert($param);
    
    }
}
