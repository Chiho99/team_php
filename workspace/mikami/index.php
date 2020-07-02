<?php
include_once("../togawa/DB/DAO.php");

// DAOのインスタンスを生成
$dao = new DAO();

// FindAllメソッドを使用してテーブルのすべてのレコードを取得
$records = $dao->FindAll();
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
                <li><a href="https://prtimes.jp/">Top</a></li>
                <li><a href="https://prtimes.jp/technology/">テクノロジー</li>
                <li><a href="https://prtimes.jp/mobile/">モバイル</li>
                <li><a href="https://prtimes.jp/app/">アプリ</li>
                <li><a href="https://prtimes.jp/entertainment/">エンタメ</li>
                <li><a href="https://prtimes.jp/beauty/">ビューティー</li>
                <li><a href="https://prtimes.jp/fashion/">ファッション</li>
                <li><a href="https://prtimes.jp/lifestyle/">ライフスタイル</li>
                <li><a href="https://prtimes.jp/business/">ビジネス</li>
                <li><a href="https://prtimes.jp/gourmet/">グルメ</li>
                <li><a href="https://prtimes.jp/sports/">スポーツ</li>
            </ul>
        </div>
        </div>
    </header>
    <main>
        <div class="main_left">
            パソコンのプレリリース一覧
            <ul>
              <?php foreach($records as $record) {?>
                <li><?=$record["tmp"] ?></li>
              <?php } ?>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li>
                <button class="load_more">もっと見る</button>
                </li>
            </ul>

        </div>
        <div class="main_right">
            検索
            <input value="キーワードで検索"><button><i class="fas fa-search"></i></button>

        </div>
    </main>
    <footer>
        <div class="footer_upper">
            <ul class="footer_upper_list">
                <li class="">ニュース配信サービス</li>
                    <ul class="footer_news">
                        <li>PR TIMESとは</li>
                        <li>料金・プラン</li>
                        <li>プレリリースを受信したい方へ</li>
                        <li>プレリリースを配信したい方へ</li>
                        <li>ものしりプロジェクト</li>
                        <li>ログイン</li>
                    </ul>
                <li class="">レコメンドサービス</li>
                    <ul class="footer_recommend">
                        <li>PR TIMES STORY</li>
                        <li>無料FAQならTayori</li>
                        <li>無料メールならTayori</li>
                        <li>タスク・プロジェクト管理ツールのJoto</li>
                        <li>PR TIMES TV</li>
                        <li>PR TIMES LIVE</li>
                        <li>PR TIMES MAGAZINE</li>
                        <li>クリッピング</li>
                        <li>広告ならAdGang</li>
                        <li>無料占い・今週の運勢ならisuta</li>
                        <li>無料恋愛占いisuta</li>
                    </ul>
                <li class="">PR TIMES公式SNS</li>
                    <ul class="footer_sns">
                        <li>公式Facebookページ</li>
                        <li>Facebookカテゴリ</li>
                        <select name="" id="">
                            <option value="PR TIMES TV"></option>
                            <option value="テクノロジー"></option>
                            <option value="アプリケーション"></option>
                            <option value="スタートアップ"></option>
                            <option value="エンタメ"></option>
                            <option value="ビューティ"></option>
                            <option value="ファッション"></option>
                            <option value="ライフスタイル"></option>
                            <option value="トラベル"></option>
                            <option value="グルメ"></option>
                            <option value="ゲーム"></option>
                            <option value="スポーツ"></option>
                            <option value="ビデオ"></option>
                            <option value="ビジネス"></option>
                            <option value="マーケティング"></option>
                        </select>
                    <li>公式Twitterページ</li>
                    <li>Twitterカテゴリ</li>
                    <select name="" id="">
                            <option value="PR TIMES TV"></option>
                            <option value="ニュース"></option>
                            <option value="テクノロジー"></option>
                            <option value="アプリケーション"></option>
                            <option value="スタートアップ"></option>
                            <option value="エンタメ"></option>
                            <option value="ビューティ"></option>
                            <option value="ファッション"></option>
                            <option value="ライフスタイル"></option>
                            <option value="トラベル"></option>
                            <option value="グルメ"></option>
                            <option value="ゲーム"></option>
                            <option value="スポーツ"></option>
                            <option value="ビデオ"></option>
                            <option value="ビジネス"></option>
                            <option value="マーケティング"></option>
                    </select>
                </ul>
            </ul>
        </div>
        <div class="footer_bottom">
            <ul>
                <li>会社概要</li>
                <li>プライバシーポリシー</li>
                <li>情報セキュリティ</li>
                <li>プレリリース掲載基準</li>
                <li>利用規約</li>
            </ul>
            <ul>
                <li>企業様のお問い合わせ</li>
                <li>報道関係者様からのお問い合わせ</li>
                <li>一般の皆様からのお問い合わせ</li>
            </ul>
            <span>Copyright&copy; PR TIMES Inc. All Rights Reserved.</span>
        </div>
    </footer>
</body>
</html>
