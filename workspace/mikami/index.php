<?php
include_once("../togawa/DB/DAO.php");

// DAOのインスタンスを生成
$dao = new DAO();

// FindAllメソッドを使用してテーブルのすべてのレコードを取得
$records = array("title", "title", "title", "title", "title", "title");
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/035034ff28.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <header>
        <div class="header_upper">
            <div class="header_upper_left">
                <span>PR TIMES</span>
                <span>プレートリリース・ニュースリリース配信サービスのPR TIMES</span>
            </div>
            <div class="header_upper_right">
                <!-- <ul>
                    <li>プレリリースを配信</li>
                    <li>配信を依頼</li>
                    <li>ログイン</li>
                </ul> -->
            </div>
        </div>
        <div class="header_bottom">
            <ul>
                <li><a href="https://prtimes.jp/">Top</a></li>|
                <li><a href="https://prtimes.jp/technology/">テクノロジー</a></li>|
                <li><a href="https://prtimes.jp/mobile/">モバイル</a></li>|
                <li><a href="https://prtimes.jp/app/">アプリ</a></li>|
                <li><a href="https://prtimes.jp/entertainment/">エンタメ</a></li>|
                <li><a href="https://prtimes.jp/beauty/">ビューティー</a></li>|
                <li><a href="https://prtimes.jp/fashion/">ファッション</a></li>|
                <li><a href="https://prtimes.jp/lifestyle/">ライフスタイル</a></li>|
                <li><a href="https://prtimes.jp/business/">ビジネス</a></li>|
                <li><a href="https://prtimes.jp/gourmet/">グルメ</a></li>|
                <li><a href="https://prtimes.jp/sports/">スポーツ</a></li>|
            </ul>
        </div>
        </div>
    </header>
    <main>
        <div class="main_left">
            PVランキング一覧<hr>
            <ul class="pv_ranking">
                <!-- ここにPVランキングデータを反映 -->
              <?php foreach($records as $record) {?>
                <li><?=$record["tmp"] ?></li><hr class="pv_bar">
              <?php } ?>
              <!-- もっと見るボタンをランキングリスト一番下のデータの次のリスト -->
                <li class="load_more">
                    <button class="load_more_btn">もっと見る</button>
                </li>
            </ul>

        </div>
        <div class="main_right">
            <i class="fas fa-search"></i>検索<br>
            <input value="キーワードで検索"><button><i class="fas fa-search"></i></button>

        </div>
    </main>
    <footer>
        <div class="footer_upper">
            <ul class="footer_news">
                <li><h2>ニュース配信サービス</h2></li>
                <li>PR TIMESとは</li>
                <li>料金・プラン</li>
                <li>プレリリースを受信したい方へ</li>
                <li>プレリリースを配信したい方へ</li>
                <li>ものしりプロジェクト</li>
                <li>ログイン</li>
            </ul>
            <ul class="footer_recommend">
                <li><h2>レコメンドサービス</h2></li>
                <li>PR TIMES STORY</li>
                <li>無料FAQならTayori</li>
                <li>無料メールならTayori</li>
                <li>タスク・プロジェクト管理ツールのJoto</li>
                <li>PR TIMES TV</li>
                <li>PR TIMES LIVE</li>
                <li>PR TIMES MAGAZINE</li>
            </ul>
            <ul class="footer_recommend_wrap">
                    <li><h2><br></h2></li>
                    <li>クリッピング</li>
                    <li>広告ならAdGang</li>
                    <li>無料占い・今週の運勢ならisuta</li>
                    <li>無料恋愛占いisuta</li>
            </ul>
            <ul class="footer_sns">
                <li><h2>PR TIMES公式SNS</h2></li>
                <li>公式Facebookページ</li>
                <li>Facebookカテゴリ
                <select name="" id="">
                    <!-- 実装するならモーダル -->
                    <!-- <option value="PR TIMES TV">PR TIMES TV</option>
                    <option value="テクノロジー">テクノロジー</option>
                    <option value="アプリケーション">アプリケーション</option>
                    <option value="スタートアップ">スタートアップ</option>
                    <option value="エンタメ">エンタメ</option>
                    <option value="ビューティ">ビューティー</option>
                    <option value="ファッション">ファッション</option>
                    <option value="ライフスタイル">ライフスタイル</option>
                    <option value="トラベル">トラベル</option>
                    <option value="グルメ">グルメ</option>
                    <option value="ゲーム">ゲーム</option>
                    <option value="スポーツ">スポーツ</option>
                    <option value="ビデオ">ビデオ</option>
                    <option value="ビジネス">ビジネス</option>
                    <option value="マーケティング">マーケティング</option> -->
                </select></li><hr>
                <li>公式Twitterページ</li>
                <li>Twitterカテゴリ
                <select name="" id="">
                    <!-- 実装するならモーダル -->
                    <!-- <option value="PR TIMES TV">PR TIMES TV</option>
                    <option value="ニュース">ニュース</option>
                    <option value="テクノロジー">テクノロジー</option>
                    <option value="アプリケーション">アプリケーション</option>
                    <option value="スタートアップ">スタートアップ</option>
                    <option value="エンタメ">エンタメ</option>
                    <option value="ビューティ">ビューティ</option>
                    <option value="ファッション">ファッション</option>
                    <option value="ライフスタイル">ライフスタイル</option>
                    <option value="トラベル">トラベル</option>
                    <option value="グルメ">グルメ</option>
                    <option value="ゲーム">ゲーム</option>
                    <option value="スポーツ">スポーツ</option>
                    <option value="ビデオ">ビデオ</option>
                    <option value="ビジネス">ビジネス</option>
                    <option value="マーケティング">マーケティング</option> -->
                </select></li><hr>
            </ul>
        </div><hr>
        <div class="footer_bottom">
            <ul class="footer_bottom1">
                <li>会社概要</li>
                <li>プライバシーポリシー</li>
                <li>情報セキュリティ</li>
                <li>プレリリース掲載基準</li>
                <li>利用規約</li>
            </ul>
            <ul class="footer_bottom2">
                <li>企業様のお問い合わせ</li>
                <li>報道関係者様からのお問い合わせ</li>
                <li>一般の皆様からのお問い合わせ</li>
            </ul>
            <span>Copyright&copy; PR TIMES Inc. All Rights Reserved.</span>
        </div>
    </footer>
</body>
</html>
