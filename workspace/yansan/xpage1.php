


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/035034ff28.js" crossorigin="anonymous"></script>
    <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script defer src="main.js"></script>
    <title>PV ranking</title>
</head>
<body>
    <header>
        <div class="header_upper">
            <div class="header_upper_left">
                <span><img src="prtimeslogo.png" alt="prtimes_logo"></span>
                <span>プレースリリース・ニュースリリース配信サービスのPR TIMES</span>
            </div>
            <div class="header_upper_right">
                <ul class="header_upper_list">
                    <li><a href="#">プレリリースを配信</a></li>
                    <li><a href="#">配信を依頼</a></li>
                    <li><a href="#">ログイン<i class="fas fa-search"></i></a></li>
                </ul>
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
            <h2>PR Trends:</h2><hr>
		<center>
                          <h3><?php include 'tre/trendz_'.$_GET["cat"].'.html' ?> </h3>  </center>
            <h2>PVランキング一覧</h2><hr>
            <ul class="pv_ranking">
                <!-- ここにPVランキングデータを反映 -->
              
              <!-- CSS用仮データ -->

			<?php include 'sqlgetpv1.php';?>	<hr>
              <!-- もっと見るボタンをランキングリスト一番下のデータの次のリスト -->
            </ul>

        </div>
        <div class="main_right">
            <!-- 検索ボタン -->
            <i class="fas fa-search"></i>検索<br>
            <input value="キーワードで検索" class="search" placeholder="">
            <button><i class="fas fa-search"></i></button><hr>
                <!-- pv categoryのリスト -->
                <div class="pv_category">
                    <ol class="category_order">
                        <li><a href="xpage1.php?cat=1&lim=5">パソコン・周辺機器</a></li>
                        <li><a href="xpage1.php?cat=2&lim=5">パソコンソフトウェア</a></li>
                        <li><a href="xpage1.php?cat=3&lim=5">プロバイダ・回線接続</a></li>
                        <li><a href="xpage1.php?cat=4&lim=5">ネットサービス</a></li>
                        <li><a href="xpage1.php?cat=5&lim=5">スマートフォンアプリ</a></li>
                        <li><a href="xpage1.php?cat=6&lim=5">サーバ・周辺機器</a></li>
                        <li><a href="xpage1.php?cat=7&lim=5">ネットワーク・ネットワーク機器</a></li>
                        <li><a href="xpage1.php?cat=8&lim=5">アプリケーション・セキュリティ</a></li>
                        <li><a href="xpage1.php?cat=9&lim=5">システム・Webサイト・アプリ開発</a></li>
                        <li><a href="xpage1.php?cat=10&lim=5">百貨店・スーパー・コンビニ・ストア</a></li>
                        <li><a href="xpage1.php?cat=11&lim=5">EC・通販</a></li>
                        <li><a href="xpage1.php?cat=12&lim=5">卸売・問屋</a></li>
                        <li><a href="xpage1.php?cat=13&lim=5">芸能</a></li>
                        <li><a href="xpage1.php?cat=14&lim=5">映画・演劇・DVD</a></li>
                        <li><a href="xpage1.php?cat=15&lim=5">音楽</a></li>
                        <li><a href="xpage1.php?cat=16&lim=5">テレビ・CM</a></li>
                        <li><a href="xpage1.php?cat=17&lim=5">スポーツ</a></li>
                        <li><a href="xpage1.php?cat=18&lim=5">アウトドア・登山</a></li>
                        <li><a href="xpage1.php?cat=19&lim=5">雑誌・本・出版物</a></li>
                        <li><a href="xpage1.php?cat=20&lim=5">漫画・アニメ</a></li>
                        <li><a href="xpage1.php?cat=21&lim=5">アート・カルチャー</a></li>
                        <li><a href="xpage1.php?cat=22&lim=5">コンシューマーゲーム</a></li>
                        <li><a href="xpage1.php?cat=23&lim=5">スマートフォンゲーム</a></li>
                        <li><a href="xpage1.php?cat=24&lim=5">アーケードゲーム</a></li>
                        <li><a href="xpage1.php?cat=25&lim=5">おもちゃ・遊具・人形</a></li>
                        <li><a href="xpage1.php?cat=26&lim=5">モバイル端末</a></li>
                        <li><a href="xpage1.php?cat=27&lim=5">カメラ</a></li>
                        <li><a href="xpage1.php?cat=28&lim=5">AV機器</a></li>
                        <li><a href="xpage1.php?cat=29&lim=5">調理・生活家電</a></li>
                        <li><a href="xpage1.php?cat=30&lim=5">健康・美容家電</a></li>
                        <li><a href="xpage1.php?cat=31&lim=5">インテリア・家具・収納</a></li>
                        <li><a href="xpage1.php?cat=32&lim=5">日用品・生活雑貨</a></li>
                        <li><a href="xpage1.php?cat=33&lim=5">ガーデン・DIY</a></li>
                        <li><a href="xpage1.php?cat=34&lim=5">自動車・カー用品</a></li>
                        <li><a href="xpage1.php?cat=35&lim=5">バイク・バイク用品</a></li>
                        <li><a href="xpage1.php?cat=36&lim=5">レディースファッション</a></li>
                        <li><a href="xpage1.php?cat=37&lim=5">メンズファッション</a></li>
                        <li><a href="xpage1.php?cat=38&lim=5">シューズ・バッグ</a></li>
                        <li><a href="xpage1.php?cat=39&lim=5">ジュエリー・アクセサリー</a></li>
                        <li><a href="xpage1.php?cat=40&lim=5">キッズ・ベビー・マタニティ</a></li>
                        <li><a href="xpage1.php?cat=41&lim=5">食品・お菓子</a></li>
                        <li><a href="xpage1.php?cat=42&lim=5">ソフトドリンク・アルコール飲料</a></li>
                        <li><a href="xpage1.php?cat=43&lim=5">レストラン・ファストフード・居酒屋</a></li>
                        <li><a href="xpage1.php?cat=44&lim=5">中食・宅配</a></li>
                        <li><a href="xpage1.php?cat=45&lim=5">スキンケア・化粧品・ヘア用品</a></li>
                        <li><a href="xpage1.php?cat=46&lim=5">ダイエット・健康食品・サプリメント</a></li>
                        <li><a href="xpage1.php?cat=47&lim=5">医療・病院</a></li>
                        <li><a href="xpage1.php?cat=48&lim=5">医薬・製薬</a></li>
                        <li><a href="xpage1.php?cat=49&lim=5">福祉・介護・リハビリ</li>
                        <li><a href="xpage1.php?cat=50&lim=5">経営・コンサルティング</a></li>
                        <li><a href="xpage1.php?cat=51&lim=5">シンクタンク</a></li>
                        <li><a href="xpage1.php?cat=52&lim=5">財務・経理</a></li>
                        <li><a href="xpage1.php?cat=53&lim=5">法務。特許。知的財産</a></li>
                        <li><a href="xpage1.php?cat=54&lim=5">銀行・信用金庫・信用組合</a></li>
                        <li><a href="xpage1.php?cat=55&lim=5">クレジットカード・ローン</a></li>
                        <li><a href="xpage1.php?cat=56&lim=5">証券・FX・投資信託</a></li>
                        <li><a href="xpage1.php?cat=57&lim=5">生命保険・損害保険</a></li>
                        <li><a href="xpage1.php?cat=58&lim=5">広告・宣伝・PR</a></li>
                        <li><a href="xpage1.php?cat=59&lim=5">マーケティング・リサーチ</a></li>
                        <li><a href="xpage1.php?cat=60&lim=5">セールス・営業</a></li>
                        <li><a href="xpage1.php?cat=61&lim=5">就職・転職。人材派遣・アルバイト</a></li>
                        <li><a href="xpage1.php?cat=62&lim=5">資格・留学・語学<</a></li>
                        <li><a href="xpage1.php?cat=63&lim=5">学校・大学</a></li>
                        <li><a href="xpage1.php?cat=64&lim=5">学習塾・予備校・通信教育</a></li>
                        <li><a href="xpage1.php?cat=65&lim=5">保育・幼児教育</a></li>
                        <li><a href="xpage1.php?cat=66&lim=5">ホテル・旅館</a></li>
                        <li><a href="xpage1.php?cat=67&lim=5">旅行・観光</a></li>
                        <li><a href="xpage1.php?cat=68&lim=5">テーマパーク・遊園地</a></li>
                        <li><a href="xpage1.php?cat=69&lim=5">住宅・マンション</a></li>
                        <li><a href="xpage1.php?cat=70&lim=5">商業施設・オフィスビル</a></li>
                        <li><a href="xpage1.php?cat=71&lim=5">建築・空間デザイン</a></li>
                        <li><a href="xpage1.php?cat=72&lim=5">建設・土木</a></li>
                        <li><a href="xpage1.php?cat=73&lim=5">鉄鋼・金属・ガラス・土石・ゴム</a></li>
                        <li><a href="xpage1.php?cat=74&lim=5">化学</a></li>
                        <li><a href="xpage1.php?cat=75&lim=5">電気・ガス・資源・エネルギー</a></li>
                        <li><a href="xpage1.php?cat=76&lim=5">交通・運送・引越し</a></li>
                        <li><a href="xpage1.php?cat=77&lim=5">物流・倉庫・貨物</a></li>
                        <li><a href="xpage1.php?cat=78&lim=5">自然・天気</a></li>
                        <li><a href="xpage1.php?cat=79&lim=5">環境・エコ・リサイクル</a></li>
                        <li><a href="xpage1.php?cat=80&lim=5">ペット・ペット用品</a></li>
                        <li><a href="xpage1.php?cat=81&lim=5">ギフト・花</a></li>
                        <li><a href="xpage1.php?cat=82&lim=5">恋愛・結構</a></li>
                        <li><a href="xpage1.php?cat=83&lim=5">出産・育児</a></li>
                        <li><a href="xpage1.php?cat=84&lim=5">葬儀</a></li>
                        <li><a href="xpage1.php?cat=85&lim=5">政治。官公庁・地方自治体</a></li>
                        <li><a href="xpage1.php?cat=86&lim=5">財団法人・社団法人・宗教法人</a></li>
                        <li><a href="xpage1.php?cat=87&lim=5">ボランティア</a></li>
                        <li><a href="xpage1.php?cat=88&lim=5">国際情報・国際サービス</a></li>
                        <li><a href="xpage1.php?cat=89&lim=5">農林・水産</a></li>
                        <li><a href="xpage1.php?cat=90&lim=5">その他</a></li>
                        <li><a href="xpage1.php?cat=91&lim=5">フィットネス・ヘルスケア</a></li>
                        <li><a href="xpage1.php?cat=92&lim=5">電子部品・半導体・電気機器</a></li>
                    </ol>
                </div>
        </div>
    </main>
    <!-- フッター -->
    <footer>
        <div class="footer_upper">
            <ul class="footer_news">
                <li><h2><a href="#">ニュース配信サービス</a></h2></li>
                <li><a href="#">PR TIMESとは</a></li>
                <li><a href="#">料金・プラン</a></li>
                <li><a href="#">プレリリースを受信したい方へ</a></li>
                <li><a href="#">プレリリースを配信したい方へ</a></li>
                <li><a href="#">ものしりプロジェクト</a></li>
                <li><a href="#">ログイン</a></li>
            </ul>
            <ul class="footer_recommend">
                <li><h2><a href="#">レコメンドサービス</h2></a></li>
                <li><a href="#">PR TIMES STORY</a></li>
                <li><a href="#">無料FAQならTayori</a></li>
                <li><a href="#">無料メールならTayori</a></li>
                <li><a href="#">タスク・プロジェクト管理ツールのJoto</a></li>
                <li><a href="#">PR TIMES TV</a></li>
                <li><a href="#">PR TIMES LIVE</a></li>
                <li><a href="#">PR TIMES MAGAZINE</a></li>
            </ul>
            <ul class="footer_recommend_wrap">
                    <li><h2><br></h2></li>
                    <li><a href="#">クリッピング</a></li>
                    <li><a href="#">広告ならAdGang</a></li>
                    <li><a href="#">無料占い・今週の運勢ならisuta</a></li>
                    <li><a href="#">無料恋愛占いisuta</a></li>
            </ul>
            <ul class="footer_sns">
                <li><h2><a href="#">PR TIMES公式SNS</h2></a></li>
                <li><a href="#">公式Facebookページ</a></li>
                <li><a href="#">Facebookカテゴリ</a>
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
                <li><a href="#">公式Twitterページ</a></li>
                <li><a href="#">Twitterカテゴリ</a>
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
                <li><a href="#">会社概要</a></li>
                <li><a href="#">プライバシーポリシー</a></li>
                <li><a href="#">情報セキュリティ</a></li>
                <li><a href="#">プレリリース掲載基準</a></li>
                <li><a href="#">利用規約</a></li>
            </ul>
            <ul class="footer_bottom2">
                <li><a href="#">企業様のお問い合わせ</a></li>
                <li><a href="#">報道関係者様からのお問い合わせ</a></li>
                <li><a href="#">一般の皆様からのお問い合わせ</a></li>
            </ul>
            <span>Copyright&copy; PR TIMES Inc. All Rights Reserved.</span>
        </div>
    </footer>
    <script type="text/javascript" src="main.js"></script>
</body>
</html>
